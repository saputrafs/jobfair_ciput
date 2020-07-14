<?php
include "../koneksi.php";
$koneksi->query("UPDATE tb_event SET 
                        active         = '1'
                    WHERE id_event = '$_GET[id_event]'");
echo "<script>history.go(-1);</script>";
