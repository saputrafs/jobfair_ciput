<?php
include "../koneksi.php";
$koneksi->query("DELETE FROM lamaran WHERE id_lamaran='$_GET[id_lamaran]'");
echo "<script>history.go(-1);</script>";
// echo "<script>alert('');history.go(-1);</script>";
?>
<!-- <script>
    window.location.href = "index.php?page=surat_masuk";
</script> -->