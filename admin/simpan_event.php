<?php
include "../koneksi.php";
if ($_POST['submit']) {
  $nama       = $_POST['nama_event'];
  $tgl_buka   = $_POST['mulai'];
  $tgl_tutup  = $_POST['selesai'];
  mysqli_query($koneksi, "INSERT INTO event(nama_event,mulai,selesai)
  VALUES('$nama','$tgl_buka','$tgl_tutup')");
  header("Location:index.php?page=home");
}
