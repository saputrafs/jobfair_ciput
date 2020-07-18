<!-- header-end -->

<!--/ bradcam_area  -->
<script src="../js/jquery.min.js"></script>
<script>
    // Show loading overlay when ajax request starts
    $(document).ajaxStart(function() {
        $('.loading-overlay').show();
    });

    // Hide loading overlay when ajax request completes
    $(document).ajaxStop(function() {
        $('.loading-overlay').hide();
    });
</script>

<script>
    function searchFilter(page_num) {
        page_num = page_num ? page_num : 0;
        var keywords = $('#keywords').val();
        var lokasi = $('#lokasi').val();
        var jenis = $('#jenis').val();
        $.ajax({
            type: 'POST',
            url: 'getData.php',
            data: 'page=' + page_num + '&keywords=' + keywords + '&lokasi=' + lokasi + '&jenis=' + jenis,
            beforeSend: function() {
                $('.loading-overlay').show();
            },
            success: function(html) {
                $('#postContent').html(html);
                $('.loading-overlay').fadeOut("slow");
            }
        });
    }
</script>
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
                                        <input type="text" id="keywords" placeholder="Ketik disini..." onkeyup="searchFilter();">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <select class="wide" id="lokasi" onchange="searchFilter();">
                                            <option data-display="Lokasi" value="">Location</option>
                                            <option value="KUDUS">KUDUS</option>
                                            <option value="PATI">PATI</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_field">
                                        <select class="wide" id="jenis" onchange="searchFilter();">
                                            <option data-display="Jenis" value="">Jenis</option>
                                            <option value="fulltime">Full Time</option>
                                            <option value="parttime">Part Time</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="loading-overlay">
                                    <div class="overlay-content">Loading...</div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9" id="postContent">
                <div class="recent_joblist_wrap">
                    <div class="recent_joblist white-bg ">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h4>Daftar Loker</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                include_once 'Pagination.class.php';
                require_once '../koneksi.php';
                $baseURL = 'getData.php';
                $limit = 5;
                $query   = $koneksi->query("SELECT COUNT(*) as rowNum FROM loker");
                $result  = $query->fetch_assoc();
                $rowCount = $result['rowNum'];
                $pagConfig = array(
                    'baseURL' => $baseURL,
                    'totalRows' => $rowCount,
                    'perPage' => $limit,
                    'contentDiv' => 'postContent',
                    'link_func' => 'searchFilter'
                );
                $pagination =  new Pagination($pagConfig);
                $query = $koneksi->query("SELECT * FROM loker,perusahaan WHERE loker.id_perusahaan=perusahaan.id_perusahaan ORDER BY loker.tgl_tutup DESC  LIMIT $limit");
                if ($query->num_rows > 0) {
                ?>

                    <div class="job_lists m-0">
                        <div class="row">
                            <?php while ($row = $query->fetch_assoc()) { ?>
                                <div class="col-lg-12 col-md-12">
                                    <div class="single_jobs white-bg d-flex justify-content-between">
                                        <div class="jobs_left d-flex align-items-center">
                                            <div class="thumb">
                                                <img src="../perusahaan/logo/<?= $row['logo'] ?>" alt="" width="70px" height="70px">
                                            </div>
                                            <div class="jobs_conetent">
                                                <a href="index.php?page=details&id_loker=<?= $row['id_loker'] ?>">
                                                    <h4><?= $row['nama_pekerjaan'] ?></h4>
                                                </a>
                                                <div class="links_locat d-flex align-items-center">
                                                    <div class="location">
                                                        <p> <i class="fa fa-map-marker"></i><?= $row['kota'] ?></p>
                                                    </div>
                                                    <div class="location">
                                                        <p> <i class="fa fa-clock-o"></i> <?= $row['jenis'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jobs_right">
                                            <div class="apply_now">
                                                <!-- <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a> -->
                                                <a href="index.php?page=details&id_loker=<?= $row['id_loker'] ?>" class="boxed-btn3">Lihat</a>
                                            </div>
                                            <div class="date">
                                                <p>Sampai Tanggal: <?= date("d-m-Y", strtotime($row['tgl_tutup'])); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php echo $pagination->createLinks(); ?>
                        <?php
                    } else {
                        echo '<p>Post(s) not found...</p>';
                    }
                        ?>
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