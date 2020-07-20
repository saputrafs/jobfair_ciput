<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <?php
        $nontifi = mysqli_query($koneksi, "SELECT COUNT(*) FROM lamaran,loker WHERE lamaran.id_loker=loker.id_loker AND loker.id_perusahaan=$id");
        if ($non = mysqli_fetch_row($nontifi)) {
        ?>
          <h3><?php echo $non[0] ?></h3>
          </a>
        <?php
        }
        ?>
        <p>Pelamar</p>
      </div>
      <div class="icon">
        <i class="fa fa-archive"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <?php
        $nontifi = mysqli_query($koneksi, "SELECT COUNT(*) FROM lamaran,loker WHERE lamaran.id_loker=loker.id_loker AND loker.id_perusahaan=$id AND lamaran.hasil='terima'");
        if ($non = mysqli_fetch_row($nontifi)) {
        ?>
          <h3><?php echo $non[0] ?></h3>
          </a>
        <?php
        }
        ?>
        <p>Pelamar Diterima</p>
      </div>
      <div class="icon">
        <i class="fa fa-thumbs-o-up"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <?php
        $nontifi = mysqli_query($koneksi, "SELECT COUNT(*) FROM lamaran,loker WHERE lamaran.id_loker=loker.id_loker AND loker.id_perusahaan=$id AND lamaran.hasil='tolak'");
        if ($non = mysqli_fetch_row($nontifi)) {
        ?>
          <h3><?php echo $non[0] ?></h3>
          </a>
        <?php
        }
        ?>
        <p>Pelamar Ditolak</p>
      </div>
      <div class="icon">
        <i class="fa fa-times-circle"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-orange">
      <div class="inner">
        <?php
        $nontifi = mysqli_query($koneksi, "SELECT COUNT(*) FROM lamaran,loker WHERE lamaran.id_loker=loker.id_loker AND loker.id_perusahaan=$id AND lamaran.hasil='setuju'");
        if ($non = mysqli_fetch_row($nontifi)) {
        ?>
          <h3><?php echo $non[0] ?></h3>
          </a>
        <?php
        }
        ?>
        <p>Pelamar Setuju</p>
      </div>
      <div class="icon">
        <i class="fa fa-times-circle"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->


  <!-- ./col -->
</div>

<div class="box-header">
  <h3 class="box-title">Daftar Pelamar Baru</h3>
</div>
<!-- /.box-header -->
<div class="box-body">

  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Loker</th>
        <th>No HP</th>
        <th>Lamaran</th>
        <th>CV</th>
        <th>Ijazah</th>
        <th>Sertifikat</th>
        <th>Settings</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 0;
      $pelamar = mysqli_query($koneksi, "SELECT * FROM loker,lamaran,user,perusahaan WHERE perusahaan.id_perusahaan=loker.id_perusahaan AND lamaran.id_loker=loker.id_loker AND lamaran.id_user=user.id_user AND loker.id_perusahaan='$id' AND lamaran.hasil='' ORDER BY id_lamaran DESC");
      while ($pel = mysqli_fetch_array($pelamar)) {
        $no++;
      ?>
        <tr>
          <td width="10px"><?= $no ?></td>
          <td><?= $pel['nama_u'] ?></td>
          <td><?= $pel['nama_pekerjaan'] ?></td>
          <td><?= $pel['no_hp'] ?></td>
          <td><a href="download.php?filename=<?= $pel['lamaran'] ?>" class="btn btn-default"><i class="fa fa-envelope"></i>Berkas</a></td>
          <td><a href="download.php?filename=<?= $pel['cv'] ?>" class="btn btn-default"><i class="fa fa-envelope"></i>Berkas</a></td>
          <td><a href="download.php?filename=<?= $pel['ijazah'] ?>" class="btn btn-default"><i class="fa fa-envelope"></i>Berkas</a></td>
          <td><a href="download.php?filename=<?= $pel['sertifikat'] ?>" class="btn btn-default"><i class="fa fa-envelope"></i>Berkas</a></td>
          <td width="150px">
            <a href="tolak.php?&id_lamaran=<?= $pel['id_lamaran'] ?>" class="btn btn-default"><i class="fa fa-times"></i>Tolak</a>
            <a href="terima.php?&id_lamaran=<?= $pel['id_lamaran'] ?>" class="btn btn-default"><i class="fa fa-check-square"></i>Terima</a>
          </td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>