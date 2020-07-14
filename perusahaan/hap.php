<?php
include "../koneksi.php";
$koneksi->query("DELETE FROM loker WHERE id_loker='$_GET[id_loker]'");
echo "<script>history.go(-1);</script>";
// echo "<script>alert('');history.go(-1);</script>";
?>
<!-- <script>
    window.location.href = "index.php?page=surat_masuk";
</script> -->