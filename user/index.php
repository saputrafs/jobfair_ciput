<?php
include "../koneksi.php";
session_start();
if (!isset($_SESSION['user'])) {
    header("location:../login.php");
}
$id = $_SESSION['user'];
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Job Fair</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/gijgo.css">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/slicknav.css">

    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="../css/responsive.css"> -->
</head>

<body>
    <?php
    $detail = mysqli_query($koneksi, "SELECT * FROM loker,perusahaan WHERE  loker.id_perusahaan=perusahaan.id_perusahaan ");
    if ($de = mysqli_fetch_array($detail)) {
    ?>
        <header>
            <div class="header-area ">
                <div id="sticky-header" class="main-header-area">
                    <div class="container-fluid ">
                        <div class="header_bottom_border">
                            <div class="row align-items-center">
                                <div class="col-xl-3 col-lg-2">
                                    <div class="logo">
                                        <a href="index.php">
                                            <img src="../img/logo.png" alt="" wudth="200px" height="70px">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-7">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="index.php?page=home">Home</a></li>
                                                <li><a href="index.php?page=list">Loker</a></li>
                                                <li><a href="index.php?page=lamaran">Lamaran</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                    <div class="Appointment">
                                        <div class="phone_num d-none d-xl-block">
                                            <a href="index.php?page=profil">Profile</a>
                                        </div>
                                        <div class="d-none d-lg-block">
                                            <a class="boxed-btn4" href="logout.php">Logout</a>
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
    <?php } ?>
    <?php
    $user = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id'");
    if ($us = mysqli_fetch_array($user)) {
    ?>
        <div class="bradcam_area bradcam_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text">
                            <h3>Selamat Datang</h3>
                            <h3><?= $us['nama_u'] ?></h3>
                            <?php
                            $nontifi = mysqli_query($koneksi, "SELECT COUNT(*) FROM loker");
                            if ($non = mysqli_fetch_row($nontifi)) {
                            ?>
                                <p>Disini Tersedia <?php echo $non[0] ?> Loker Pekerjaan Yang Bisa Anda Pilih...</p>
                                </a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!--/ bradcam_area  -->
    <?php
    include "pages.php";
    ?>

</body>
<script src="../js/vendor/modernizr-3.5.0.min.js"></script>
<script src="../js/vendor/jquery-1.12.4.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/isotope.pkgd.min.js"></script>
<script src="../js/ajax-form.js"></script>
<script src="../js/waypoints.min.js"></script>
<script src="../js/jquery.counterup.min.js"></script>
<script src="../js/imagesloaded.pkgd.min.js"></script>
<script src="../js/scrollIt.js"></script>
<script src="../js/jquery.scrollUp.min.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/nice-select.min.js"></script>
<script src="../js/jquery.slicknav.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/plugins.js"></script>
<script src="../js/gijgo.min.js"></script>



<!--contact js-->
<script src="../js/contact.js"></script>
<script src="../js/jquery.ajaxchimp.min.js"></script>
<script src="../js/jquery.form.js"></script>
<script src="../js/jquery.validate.min.js"></script>
<script src="../js/mail-script.js"></script>


<script src="../js/main.js"></script>

</html>