    <?php
    $idl = $_GET['id_loker'];
    $detail = mysqli_query($koneksi, "SELECT * FROM perusahaan,event,loker WHERE loker.id_perusahaan=perusahaan.id_perusahaan AND loker.id_event=loker.id_event AND loker.id_loker='$idl' ORDER BY loker.tgl_tutup DESC ");
    if ($de = mysqli_fetch_array($detail)) {
    ?>

        <!--/ bradcam_area  -->

        <div class="job_details_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="job_details_header">
                            <div class="single_jobs white-bg d-flex justify-content-between">
                                <div class="jobs_left d-flex align-items-center">
                                    <div class="thumb">
                                        <img src="../perusahaan/logo/<?= $de['logo'] ?>" alt="" width="70px" height="70px">
                                    </div>
                                    <div class="jobs_conetent">
                                        <a href="#">
                                            <h4><?= $de['nama_pekerjaan'] ?></h4>
                                        </a>
                                        <div class="links_locat d-flex align-items-center">
                                            <div class="location">
                                                <p> <i class="fa fa-map-marker"></i><?= $de['alamat'] ?>,<?= $de['kota'] ?></p>
                                            </div>
                                            <div class="location">
                                                <p> <i class="fa fa-clock-o"></i><?= $de['jenis'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jobs_right">
                                    <div class="apply_now">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="descript_wrap white-bg">
                            <div class="single_wrap">
                                <h4>Diskripsi Pekerjaan</h4>
                                <?= $de['persyaratan'] ?>
                            </div>
                        </div>
                        <div class="apply_job_form white-bg">
                            <?php
                            $limit = mysqli_query($koneksi, "SELECT * FROM lamaran,loker,user,event WHERE lamaran.id_user=user.id_user AND lamaran.id_loker=loker.id_loker AND loker.id_event=event.id_event AND lamaran.id_user='$id' AND loker.id_event='$de[id_event]' AND event.active='1'");
                            $lamaran = mysqli_query($koneksi, "SELECT * FROM lamaran,loker,user,event WHERE lamaran.id_user=user.id_user AND lamaran.id_loker=loker.id_loker AND loker.id_event=event.id_event AND lamaran.id_user='$id' AND lamaran.id_loker='$_GET[id_loker]'");
                            $expired = mysqli_query($koneksi, "SELECT * FROM perusahaan,loker,event WHERE perusahaan.id_perusahaan=loker.id_perusahaan AND loker.id_event=event.id_event AND event.active='0' AND loker.id_event='$de[id_event]'");
                            $kouta=mysqli_query($koneksi,"SELECT*FROM loker WHERE id_loker='$_GET[id_loker]'");
                            $kou=(mysqli_fetch_array($kouta));
                            if (mysqli_num_rows($lamaran)) {
                                echo '<h4 class="btn btn-primary">Anda Telah Melamar</h4>';
                            } elseif (mysqli_num_rows($limit) >= 2) {
                                echo '<h4 class="btn btn-primary">Batas 2 Loker Per Event</h4>';
                            } elseif (mysqli_num_rows($expired)) {
                                echo '<h4 class="btn btn-danger">Loker Ditutup</h4>';
                            }elseif ($kou['kouta']=='0') {
                                echo '<h4 class="btn btn-danger">Kouta Pelamar Telah Habis</h4>';
                            } else {
                                include "upload.php";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="job_sumary">
                            <div class="summery_header">
                                <h3>Ringkasan</h3>
                            </div>
                            <div class="job_content">
                                <ul>
                                    <li>Dibuka: <span><?= date("d-m-Y", strtotime($de['tgl_buka'])); ?></span></li>
                                    <li>Ditutup: <span><?= date("d-m-Y", strtotime($de['tgl_tutup'])); ?></span></li>
                                    <li>Kouta <span><?= $de['kouta'] ?></span></li>
                                    <!-- <li>Salary: <span>50k - 120k/y</span></li> -->
                                    <li>Lokasi <span><?= $de['alamat'] ?></span></li>
                                    <li>Tipe <span><?= $de['jenis'] ?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>