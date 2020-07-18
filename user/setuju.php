<?php
include "../koneksi.php";
$k=$_GET['id_loker'];
$sql=mysqli_query($koneksi,"SELECT * FROM loker WHERE id_loker=$k");
$re=mysqli_fetch_array($sql);
$a=$re['kouta']-1;
$koneksi->query("UPDATE lamaran,loker SET 
                        lamaran.hasil         = 'setuju',
                        loker.kouta           = '$a'
                    WHERE lamaran.id_lamaran = '$_GET[id_lamaran]' AND loker.id_loker=$k");
header("Location:index.php?page=lamaran");
