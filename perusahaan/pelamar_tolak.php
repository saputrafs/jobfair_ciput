<div class="box-header">
  <h3 class="box-title">Daftar Pelamar Ditolak</h3>
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
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 0;
      $pelamar = mysqli_query($koneksi, "SELECT * FROM loker,lamaran,user,perusahaan WHERE perusahaan.id_perusahaan=loker.id_perusahaan AND lamaran.id_loker=loker.id_loker AND lamaran.id_user=user.id_user AND loker.id_perusahaan='$id' AND lamaran.hasil='tolak' ORDER BY id_lamaran DESC");
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
 
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>