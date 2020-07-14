<?php
include "../koneksi.php";
$koneksi->query("UPDATE loker SET 
                         id_perusahaan = '$_POST[id_perusahaan]',
                         id_event = '$_POST[id_event]',
                         nama_pekerjaan = '$_POST[nama_pekerjaan]',
                         jenis = '$_POST[jenis]',
                         persyaratan = '$_POST[persyaratan]',
                         tgl_buka = '$_POST[tgl_buka]',
                         tgl_tutup = '$_POST[tgl_tutup]',
                         kouta = '$_POST[kouta]'
                    WHERE id_loker = '$_POST[id_loker]'");
?>
<script>
    window.location.href = 'index.php?page=loker';
</script>