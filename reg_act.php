<?php
include "koneksi.php";
if ($_POST['submit']) {
  $nik      = $_POST['nik'];
  $nama      = $_POST['nama_u'];
  $jekel      = $_POST['jekel'];
  $hp      = $_POST['no_hp'];
  $user      = $_POST['email'];
  $pass      = $_POST['password'];
  mysqli_query($koneksi, "INSERT INTO user(nik,nama_u,jekel,no_hp,email,password)
  VALUES('$nik','$nama','$jekel','$hp','$user','$pass')");
  header("Location:login.php");
}
