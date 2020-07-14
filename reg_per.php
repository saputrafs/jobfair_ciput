<?php
include "koneksi.php";
if ($_POST['submit']) {
  $npwp       = $_POST['npwp'];
  $nama       = $_POST['nama_p'];
  $no         = $_POST['no_telp'];
  $kota       = $_POST['kota'];
  $alamat     = $_POST['alamat'];
  $ket        = $_POST['ket'];
  $logo    = $_FILES['logo']['name'];
  $email      = $_POST['email'];
  $pass       = $_POST['password'];
  mysqli_query($koneksi, "INSERT INTO perusahaan(npwp,nama_p,no_telp,alamat,kota,ket,logo,email,password)
  VALUES('$npwp','$nama','$no','$kota','$alamat','$ket','$logo','$email','$pass')");
  move_uploaded_file($_FILES['logo']['tmp_name'], 'perusahaan/logo/' . $logo);
  header("Location:loginp.php");
}
