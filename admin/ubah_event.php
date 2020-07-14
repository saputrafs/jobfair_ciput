<?php
include "../koneksi.php";
$koneksi->query("UPDATE event SET 
                        nama_event        = '$_POST[nama_event]',
                        mulai         = '$_POST[mulai]',
                        selesai       = '$_POST[selesai]'
                    WHERE id_event = '$_POST[id_event]'");
echo "<script>alert('Data Event Berhasil Diubah');
window.location.href = 'index.php?page=home';</script>";
