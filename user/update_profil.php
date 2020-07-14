<?php
include "../koneksi.php";
$gambar   = $_FILES['ktp']['name'];
// $nama = addslashes($_POST['nama']);
if (empty($gambar)) {
    $koneksi->query("UPDATE user SET 
                        nik           = '$_POST[nik]',
                        nama_u           = '$_POST[nama_u]',
                        ttl        = '$_POST[ttl]',
                        jekel  = '$_POST[jekel]',
                        no_hp  = '$_POST[no_hp]',
                        email      = '$_POST[email]',
                        password      = '$_POST[password]'
                    WHERE id_user = '$_POST[id_user]'");
} else {
    $hapus = $koneksi->query("SELECT*FROM user WHERE id_user='$_POST[id_user]'");
    $nama_gambar = mysqli_fetch_array($hapus);
    $lokasi = $nama_gambar['ktp'];
    $hapus_gambar = "../ktp/$lokasi";
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['ktp']['tmp_name'], '../ktp/' . $gambar);
    $koneksi->query("UPDATE user SET 
                        nik           = '$_POST[nik]',
                        nama_u           = '$_POST[nama_u]',
                        ttl        = '$_POST[ttl]',
                        jekel  = '$_POST[jekel]',
                        no_hp  = '$_POST[no_hp]',
                        ktp  = '$gambar',
                        email      = '$_POST[email]',
                        password      = '$_POST[password]'
                    WHERE id_user = '$_POST[id_user]'");
}
?>
<script>
    window.location.href = 'index.php?page=profil';
</script>