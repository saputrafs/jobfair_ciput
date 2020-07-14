<?php
include "koneksi.php";
session_start();
if (isset($_POST['submit'])) {
  $user = $_POST['email'];
  $pass = $_POST['password'];
  $cek = $koneksi->query("SELECT * FROM user WHERE email='$user' AND password='$pass'");
  if (mysqli_num_rows($cek) > 0) {
    $row = mysqli_fetch_array($cek);
    $_SESSION['user'] = $row['id_user'];
    header("location:user/index.php");
  } else {
    echo "<script>alert('Login gagal');history.go(-1);</script>";
  }
}
