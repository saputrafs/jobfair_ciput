<?php
include "../koneksi.php";
if ($_POST['submit']) {
  $id         = $_POST['id_loker'];
  $iv         = $_POST['id_user'];
  $cv       = $_FILES['cv']['name'];

  mysqli_query($koneksi, "INSERT INTO lamaran(id_loker,id_user,cv)
  VALUES('$id','$iv','$cv')");
  move_uploaded_file($_FILES['cv']['tmp_name'], '../lamaran/' . $cv);
  echo "<script>alert('CV berhasil terkirim');history.go(-1);</script>";
}
