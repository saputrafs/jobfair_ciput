<?php
include "koneksi.php";
session_start();
if (isset($_POST['submit'])) {
  $user = $_POST['email'];
  $pass = $_POST['password'];
  $cek = $koneksi->query("SELECT * FROM perusahaan WHERE email='$user' AND password='$pass'");
  if (mysqli_num_rows($cek) > 0) {
    $row = mysqli_fetch_array($cek);
    $_SESSION['perusahaan'] = $row['id_perusahaan'];
    header("location:perusahaan/index.php");
  } else {
    echo "<script>alert('Login gagal');history.go(-1);</script>";
  }
}
