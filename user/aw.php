<?php
include "../koneksi.php";
$koneksi->query("UPDATE lamaran SET 
                        hasil         = 'tolak'
                    WHERE id_lamaran = '$_GET[id_lamaran]'");
echo "<script>history.go(-1);</script>";
