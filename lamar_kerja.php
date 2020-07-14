<?php
include "../koneksi.php";
if ($_POST['submit']) {
  $id         = $_POST['id_perusahaan'];
  $nama       = $_POST['nama_pekerjaan'];
  $jenis      = $_POST['jenis'];
  $persyaratan= $_POST['persyaratan'];

  mysqli_query($koneksi, "INSERT INTO lamaran(id_perusahaan,nama_pekerjaan,jenis,persyaratan,tgl_buka,tgl_tutup,kouta)
  VALUES('$id','$nama','$jenis','$persyaratan','$tgl_buka','$tgl_tutup','$kouta')");
  header("Location:index.php");
}
