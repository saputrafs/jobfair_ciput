    <?php
    $detail = mysqli_query($koneksi, "SELECT * FROM loker,perusahaan WHERE  loker.id_perusahaan=perusahaan.id_perusahaan AND loker.id_loker='$_GET[id_loker]'");
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
                                        <a href="index.html">
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
        <div class="bradcam_area bradcam_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text">
                            <h3><?= $de['nama_pekerjaan'] ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ bradcam_area  -->

        <div class="job_details_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="job_details_header">
                            <div class="single_jobs white-bg d-flex justify-content-between">
                                <div class="jobs_left d-flex align-items-center">
                                    <div class="thumb">
                                        <img src="img/svg_icon/1.svg" alt="">
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
                                        <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
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
                            <h4>Daftar Pekerjaan</h4>
                            <!-- <form action="lamar_kerja.php">
                            <div class="row">
 
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="button" id="inputGroupFileAddon03"><i
                                                    class="fa fa-cloud-upload" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <div class="custom-file">
                                            <input type="hidden" name="id_loker" value="">
                                            <input type="hidden" name="id_user" value="">
                                            <input type="file" class="custom-file-input" id="inputGroupFile03"
                                                aria-describedby="inputGroupFileAddon03" name="cv">
                                            <label class="custom-file-label" for="inputGroupFile03">Upload CV</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="submit_btn">
                                    <input class="boxed-btn3 w-100" type="submit" value="Kirim">
                                    </div>
                                </div>
                            </div>
                        </form> -->
                            <a href="login.php" class="boxed-btn3 w-100">LOGIN DAHULU</a>
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