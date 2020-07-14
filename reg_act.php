<?php
include "koneksi.php";
if ($_POST['submit']) {
  $nik      = $_POST['nik'];
  $nama      = $_POST['nama_u'];
  $jekel      = $_POST['jekel'];
  $user      = $_POST['email'];
  $pass      = $_POST['password'];
  mysqli_query($koneksi, "INSERT INTO user(nik,nama_u,jekel,email,password)
  VALUES('$nik','$nama','$jekel','$user','$pass')");
  header("Location:login.php");
}
