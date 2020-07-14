<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid ">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
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
                        </div>>
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

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>4536+ Jobs Available</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<?php
$s_lok = "";
$s_keyword = "";
if (isset($_POST['search'])) {
    $s_lok = $_POST['lokasi'];
    $s_keyword = $_POST['s_keyword'];
}
?>
<!-- job_listing_area_start  -->
<div class="job_listing_area plus_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="job_filter white-bg">
                    <div class="form_inner white-bg">
                        <h3>Filter</h3>
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <input type="text" placeholder="Search keyword" name="s_keyword" id="s_keyword" class="form-control" value="<?php echo $s_keyword; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <select class="wide" name="lokasi" id="lokasi">
                                            <option data-display="Location">Location</option>
                                            <?php
                                            $lokasi = mysqli_query($koneksi, "SELECT * FROM perusahaan ");
                                            while ($lok = mysqli_fetch_array($lokasi)) {
                                            ?>
                                                <option value="<?= $lok['kota'] ?>" <?php if ($s_lok == $lok['kota']) {
                                                                                        echo "selected";
                                                                                    } ?>><?= $lok['kota'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-12">
                                        <div class="single_field">
                                            <select class="wide">
                                                <option data-display="Category">Category</option>
                                                <option value="1">Category 1</option>
                                                <option value="2">Category 2 </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_field">
                                            <select class="wide">
                                                <option data-display="Experience">Experience</option>
                                                <option value="1">Experience 1</option>
                                                <option value="2">Experience 2 </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_field">
                                            <select class="wide">
                                                <option data-display="Job type">Job type</option>
                                                <option value="1">full time 1</option>
                                                <option value="2">part time 2 </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_field">
                                            <select class="wide">
                                                <option data-display="Qualification">Qualification</option>
                                                <option value="1">Qualification 1</option>
                                                <option value="2">Qualification 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single_field">
                                            <select class="wide">
                                                <option data-display="Gender">Gender</option>
                                                <option value="1">male</option>
                                                <option value="2">female</option>
                                            </select>
                                        </div>
                                    </div> -->
                            </div>
                        </form>
                    </div>
                    <div class="reset_btn">
                        <button class="boxed-btn3 w-100" id="search" name="search" type="submit">Cari</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="recent_joblist_wrap">
                    <div class="recent_joblist white-bg ">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h4>Daftar Loker</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="job_lists m-0">
                    <div class="row">


                        <?php
                        $batas = 5;
                        $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                        $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                        $previous = $halaman - 1;
                        $next = $halaman + 1;

                        $data = mysqli_query($koneksi, "SELECT * FROM loker,perusahaan WHERE loker.id_perusahaan=perusahaan.id_perusahaan");
                        $jumlah_data = mysqli_num_rows($data);
                        $total_halaman = ceil($jumlah_data / $batas);
                        $loker = mysqli_query($koneksi, "SELECT * FROM loker,perusahaan WHERE loker.id_perusahaan=perusahaan.id_perusahaan limit $halaman_awal, $batas");

                        while ($row = mysqli_fetch_array($loker)) {
                        ?>
                            <div class="col-lg-12 col-md-12">
                                <div class="single_jobs white-bg d-flex justify-content-between">
                                    <div class="jobs_left d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="perusahaan/logo/<?= $row['logo'] ?>" alt="" width="70px" height="70px">
                                        </div>
                                        <div class="jobs_conetent">
                                            <a href="job_details.html">
                                                <h4><?= $row['nama_pekerjaan'] ?></h4>
                                            </a>
                                            <div class="links_locat d-flex align-items-center">
                                                <div class="location">
                                                    <p> <i class="fa fa-map-marker"></i> <?= $row['alamat'] ?>, <?= $row['kota'] ?></p>
                                                </div>
                                                <div class="location">
                                                    <p> <i class="fa fa-clock-o"></i> <?= $row['jenis'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jobs_right">
                                        <div class="apply_now">
                                            <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                            <a href="index.php?page=details&id_perusahaan=<?= $row['id_loker'] ?>" class="boxed-btn3">Lihat</a>
                                        </div>
                                        <div class="date">
                                            <p>Sampai Tanggal: <?= date("d-m-Y", strtotime($row['tgl_tutup'])); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" <?php if ($halaman > 1) {
                                                                echo "href='?halaman=$Previous'";
                                                            } ?>>Previous</a>
                                </li>
                                <?php
                                for ($x = 1; $x <= $total_halaman; $x++) {
                                ?>
                                    <li class="page-item"><a class="page-link" href="index.php?page=list&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                <?php
                                }
                                ?>
                                <li class="page-item">
                                    <a class="page-link" <?php if ($halaman < $total_halaman) {
                                                                echo "href='index.php?page=list&halaman=$next'";
                                                            } ?>>Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pagination_wrap">
                                <ul>
                                    <li><a href="#"> <i class="ti-angle-left"></i> </a></li>

                                    <li><a href="#"> <i class="ti-angle-right"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- job_listing_area_end  -->

<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                        <p>
                            finloan@support.com <br>
                            +10 873 672 6782 <br>
                            600/D, Green road, NewYork
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".4s">
                        <h3 class="footer_title">
                            Company
                        </h3>
                        <ul>
                            <li><a href="#">About </a></li>
                            <li><a href="#"> Pricing</a></li>
                            <li><a href="#">Carrier Tips</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <h3 class="footer_title">
                            Category
                        </h3>
                        <ul>
                            <li><a href="#">Design & Art</a></li>
                            <li><a href="#">Engineering</a></li>
                            <li><a href="#">Sales & Marketing</a></li>
                            <li><a href="#">Finance</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                        <h3 class="footer_title">
                            Subscribe
                        </h3>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Subscribe</button>
                        </form>
                        <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                            luckily.</p>
                    </div>
                </div>
            </div>
        </div>