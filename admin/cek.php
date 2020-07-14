<?php
include "../koneksi.php";
session_start();
if (isset($_POST['submit'])) {
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $cek = $koneksi->query("SELECT * FROM admin WHERE username='$user' AND password='$pass'");
  if (mysqli_num_rows($cek) > 0) {
    $row = mysqli_fetch_array($cek);
    $_SESSION['admin'] = $row['id_admin'];
    header("location:index.php");
  } else {
    echo "<script>alert('Login gagal');history.go(-1);</script>";
  }
}
