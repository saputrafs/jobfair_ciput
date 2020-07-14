<?php
if (isset($_POST['page'])) {
    include_once 'Pagination.class.php';
    require_once 'koneksi.php';
    $baseURL = 'getData.php';
    $offset = !empty($_POST['page']) ? $_POST['page'] : 0;
    $limit = 5;
    // $whereSQL = $orderSQL = '';
    // if (!empty($_POST['keywords'])) {
    //     $whereSQL = "WHERE loker.nama_pekerjaan LIKE '%" . $_POST['keywords'] . "%' AND loker.id_perusahaan=perusahaan.id_perusahaan";
    // }
    // if (!empty($_POST['lokasi'])) {
    //     $orderSQL = " ORDER BY kota " . $_POST['lokasi'];
    // } else {
    //     $orderSQL = " ORDER BY kota DESC ";
    // }
    $query   = $koneksi->query("SELECT COUNT(*) as rowNum FROM loker,perusahaan " . $whereSQL);
    $result  = $query->fetch_assoc();
    $rowCount = $result['rowNum'];
    $pagConfig = array(
        'baseURL' => $baseURL,
        'totalRows' => $rowCount,
        'perPage' => $limit,
        'currentPage' => $offset,
        'contentDiv' => 'postContent',
        'link_func' => 'searchFilter'
    );
    $pagination =  new Pagination($pagConfig);
    $query = $koneksi->query("SELECT * FROM loker,perusahaan WHERE loker.nama_pekerjaan LIKE '%" . $_POST['keywords'] . "%' 
    AND perusahaan.kota LIKE '%" . $_POST['lokasi'] . "%' AND loker.id_perusahaan=perusahaan.id_perusahaan ORDER BY loker.tgl_tutup DESC LIMIT $offset,$limit");
    if ($query->num_rows > 0) {
?>
        <div class="recent_joblist_wrap">
            <div class="recent_joblist white-bg ">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h4>Hasil Pencarian Loker</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="job_lists m-0">
            <div class="row">
                <?php while ($row = $query->fetch_assoc()) { ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="perusahaan/logo/<?= $row['logo'] ?>" alt="" width="70px" height="70px">
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
                                    <a href="index.php?page=details&id_perusahaan=<?= $row['id_loker'] ?>" class="boxed-btn3">Lihat</a>
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
        echo '<p>Data Telah habis</p>';
        echo $pagination->endlink();
    }
}
        ?>