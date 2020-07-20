<?php
include "../koneksi.php";
if ($_POST['submit']) {
  $id         = $_POST['id_loker'];
  $iv         = $_POST['id_user'];
  $cv       = $_FILES['cv']['name'];
  $lamaran       = $_FILES['lamaran']['name'];
  $ija       = $_FILES['ijazah']['name'];
  $ser       = $_FILES['sertifikat']['name'];

  mysqli_query($koneksi, "INSERT INTO lamaran(id_loker,id_user,cv,lamaran,ijazah,sertifikat)
  VALUES('$id','$iv','$cv','$lamaran','$ija','$ser')");
  move_uploaded_file($_FILES['cv']['tmp_name'], '../lamaran/' . $cv);
  move_uploaded_file($_FILES['lamaran']['tmp_name'], '../lamaran/' . $lamaran);
  move_uploaded_file($_FILES['ijazah']['tmp_name'], '../lamaran/' . $ija);
  move_uploaded_file($_FILES['sertifikat']['tmp_name'], '../lamaran/' . $ser);
  echo "<script>alert('Lamaran berhasil terkirim');history.go(-1);</script>";
}
