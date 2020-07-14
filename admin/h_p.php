<?php
include "../koneksi.php";
$koneksi->query("DELETE FROM perusahaan WHERE perusahaan='$_GET[perusahaan]'");
echo "<script>alert('perusahaan telah dihapus');history.go(-1);</script>";
?>
<!-- <script>
    window.location.href = "index.php?page=surat_masuk";
</script> -->