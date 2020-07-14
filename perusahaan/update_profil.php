<?php
include "../koneksi.php";
$gambar   = $_FILES['logo']['name'];
// $nama = addslashes($_POST['nama']);
if (empty($gambar)) {
    $koneksi->query("UPDATE perusahaan SET 
                        npwp           = '$_POST[npwp]',
                        nama_p           = '$_POST[nama_p]',
                        no_telp        = '$_POST[no_telp]',
                        alamat  = '$_POST[alamat]',
                        kota  = '$_POST[kota]',
                        ket  = '$_POST[ket]',
                        email      = '$_POST[email]',
                        password      = '$_POST[password]'
                    WHERE id_perusahaan = '$_POST[id_perusahaan]'");
} else {
    $hapus = $koneksi->query("SELECT*FROM perusahaan WHERE id_perusahaan='$_POST[id_perusahaan]'");
    $nama_gambar = mysqli_fetch_array($hapus);
    $lokasi = $nama_gambar['logo'];
    $hapus_gambar = "logo/$lokasi";
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['logo']['tmp_name'], 'logo/' . $gambar);
    $koneksi->query("UPDATE perusahaan SET 
                        npwp           = '$_POST[npwp]',
                        nama_p           = '$_POST[nama_p]',
                        no_telp        = '$_POST[no_telp]',
                        alamat  = '$_POST[alamat]',
                        kota  = '$_POST[kota]',
                        ket  = '$_POST[ket]',
                        logo = '$gambar',
                        email      = '$_POST[email]',
                        password      = '$_POST[password]'
                    WHERE id_perusahaan = '$_POST[id_perusahaan]'");
}
?>
<script>
    window.location.href = 'index.php?page=profil';
</script>