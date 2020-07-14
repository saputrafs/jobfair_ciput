<header>
</header>
<!-- header-end -->
<?php
$loker = mysqli_query($koneksi, "SELECT * FROM loker");
if ($lok = mysqli_fetch_array($loker)) {
?>
    <!-- slider_area_start -->
<?php } ?>
<div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
    <img src="img/banner/illustration.png" alt="">
</div>
</div>
<div class="catagory_area">
    <form action="" method="post">
        <div class="container">
            <div class="row cat_search">
                <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <input type="text" placeholder="Cari" name="cari">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <input type="text" placeholder="Lokasi" name="lokasi">
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-4">
                        <div class="single_input">
                            <select class="wide">
                                <option value="partime">Parttime</option>
                                <option value="fulltme">Fulltime</option>
                            </select>
                        </div>
                    </div> -->
                <div class="col-lg-3 col-md-12">
                    <div class="job_btn">
                        <input class="boxed-btn3" type="submit" value="Find Job" name="pitek">
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="popular_search d-flex align-items-center">
                        <span>Popular Search:</span>
                        <ul>
                            <li><a href="#">Design & Creative</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Administration</a></li>
                            <li><a href="#">Teaching & Education</a></li>
                            <li><a href="#">Engineering</a></li>
                            <li><a href="#">Software & Web</a></li>
                            <li><a href="#">Telemarketing</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
    </form>
</div>


<div class="job_listing_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section_title">
                    <h3>Daftar Lowongan Terbaru</h3>
                    <?php
                    if (isset($_POST['pitek'])) {
                        $cari = $_POST['cari'];
                        $lokasi = $_POST['lokasi'];
                        echo "
                    <b>Hasil Pencarian : " . $cari . " - " . $lokasi . "</b>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="job_lists">
            <div class="row">

                <?php
                if (isset($_POST['pitek'])) {
                    $loker = mysqli_query($koneksi, "SELECT*FROM loker,perusahaan WHERE loker.nama_pekerjaan LIKE '%" . $cari . "%' AND perusahaan.kota LIKE '%" . $lokasi . "%' AND loker.id_perusahaan=perusahaan.id_perusahaan");
                } else {
                    $loker = mysqli_query($koneksi, "SELECT*FROM loker,perusahaan WHERE loker.id_perusahaan=perusahaan.id_perusahaan");
                }
                // $loker = mysqli_query($koneksi, "SELECT * FROM loker,perusahaan WHERE  loker.id_perusahaan=perusahaan.id_perusahaan");
                while ($lok = mysqli_fetch_array($loker)) {
                ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="../perusahaan/logo/<?= $lok['logo'] ?>" alt="" width="70px" height="70px">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="index.php?page=details&id_loker=<?= $lok['id_loker'] ?>">
                                        <h4><?= $lok['nama_pekerjaan'] ?></h4>
                                    </a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> <?= $lok['alamat'] ?>, <?= $lok['kota'] ?></p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i> <?= $lok['jenis'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a href="index.php?page=details&id_loker=<?= $lok['id_loker'] ?>" class="boxed-btn3">Lihat</a>
                                </div>
                                <div class="date">
                                    <p>Sampai Tanggal: <?= date("d-m-Y", strtotime($lok['tgl_tutup'])); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-lg-7">
                <div class="brouse_job text-right">
                    <a href="index.php?page=list" class="boxed-btn4">Lebih Banyak Lowongan</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>