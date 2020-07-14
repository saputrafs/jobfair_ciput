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
        <i class="ion ion-bag"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <?php
        $nontifi = mysqli_query($koneksi, "SELECT COUNT(*) FROM loker");
        if ($non = mysqli_fetch_row($nontifi)) {
        ?>
          <h3><?php echo $non[0] ?></h3>
          </a>
        <?php
        }
        ?>

        <p>Loker</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

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
        <th>TTL</th>
        <th>No HP</th>
        <th>KTP</th>
        <th>Settings</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 0;
      $pelamar = mysqli_query($koneksi, "SELECT * FROM loker,lamaran,user,perusahaan WHERE perusahaan.id_perusahaan=loker.id_perusahaan AND lamaran.id_loker=loker.id_loker AND lamaran.id_user=user.id_user AND loker.id_perusahaan='$id' AND lamaran.hasil=''");
      while ($pel = mysqli_fetch_array($pelamar)) {
        $no++;
      ?>
        <tr>
          <td width="10px"><?= $no ?></td>
          <td><?= $pel['nama_u'] ?></td>
          <td><?= $pel['nama_pekerjaan'] ?></td>
          <td><?= $pel['jekel'] ?></td>
          <td><?= $pel['no_hp'] ?></td>
          <td> <a target="_blank" href="../ktp/<?= $pel['ktp'] ?>"><img src="../ktp/<?= $pel['ktp'] ?>" width="50px" height="30px" /></a>
          </td>
          <td width="300rpx">
            <a href="download.php?filename=<?= $pel['cv'] ?>" class="btn btn-default"><i class="fa fa-envelope"></i>Berkas</a>
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