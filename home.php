<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid ">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="img/logo.png" alt="" wudth="200px" height="70px">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php?page=home">Home</a></li>
                                        <li><a href="index.php?page=list">Loker</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="phone_num d-none d-xl-block">
                                    <a href="login.php">Masuk</a>
                                </div>
                                <div class="phone_num d-none d-xl-block">
                                    <a href="register.php">Daftar</a>
                                </div>
                                <div class="d-none d-lg-block">
                                    <a class="boxed-btn4" href="daftar_perusahaan.php">Perusahaan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->
<?php
$loker = mysqli_query($koneksi, "SELECT * FROM loker");
if ($lok = mysqli_fetch_array($loker)) {
?>
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">
                            <h5 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">Tersedia

                                <?php
                                $juma = mysqli_query($koneksi, "SELECT COUNT(*) FROM loker");
                                if ($j = mysqli_fetch_row($juma)) {
                                ?> <?php echo $j[0] ?> Loker
                                <?php } ?>
                            </h5>
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Cari Pekerjaan Yang
                                Kamu Inginkan
                            </h3>
                            <!-- <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">We provide online
                                instant cash loans with quick approval that suit your term length</p> -->
                            <div class="sldier_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
        <img src="img/banner/illustration.png" alt="">
    </div>
    </div>
    <!-- slider_area_end -->

    <!-- catagory_area -->
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
    <!-- job_listing_area_start  -->
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
                                        <img src="perusahaan/logo/<?= $lok['logo'] ?>" alt="" width="70px" height="70px">
                                    </div>
                                    <div class="jobs_conetent">
                                        <a href="index.php?page=details&id_loker=<?= $lok['id_loker'] ?>">
                                            <h4><?= $lok['nama_pekerjaan'] ?></h4>
                                        </a>
                                        <div class="links_locat d-flex align-items-center">
                                            <div class="location">
                                                <p> <i class="fa fa-map-marker"></i><?= $lok['kota'] ?></p>
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