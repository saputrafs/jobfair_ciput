<?php
include "../koneksi.php";
if ($_POST['submit']) {
  $id         = $_POST['id_perusahaan'];
  $iv         = $_POST['id_event'];
  $nama       = $_POST['nama_pekerjaan'];
  $jenis      = $_POST['jenis'];
  $persyaratan= $_POST['persyaratan'];
  $tgl_buka   = $_POST['tgl_buka'];
  $tgl_tutup  = $_POST['tgl_tutup'];
  $kouta      = $_POST['kouta'];
  mysqli_query($koneksi, "INSERT INTO loker(id_perusahaan,id_event,nama_pekerjaan,jenis,persyaratan,tgl_buka,tgl_tutup,kouta)
  VALUES('$id','$iv','$nama','$jenis','$persyaratan','$tgl_buka','$tgl_tutup','$kouta')");
  header("Location:index.php?page=loker");
