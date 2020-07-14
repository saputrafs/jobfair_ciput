<?php
include "../koneksi.php";
$koneksi->query("DELETE FROM user WHERE user='$_GET[user]'");
echo "<script>history.go(-1);</script>";
echo "<script>alert('User telah dihapus');history.go(-1);</script>";
?>
<!-- <script>
    window.location.href = "index.php?page=surat_masuk";
</script> -->