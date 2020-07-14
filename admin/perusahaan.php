<div class="box-header">
  <h3 class="box-title">Daftar Perusahaan</h3>
  <!-- <a href="index.php?page=tambah_event"><button type="button" class="btn btn-primary">Tambah User</button></a> -->
</div>
<!-- /.box-header -->
<div class="box-body">

  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>NPWP</th>
        <th>Nama</th>
        <th>No Telp</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Settings</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 0;
      $perusahaan = mysqli_query($koneksi, "SELECT * FROM perusahaan");
      while ($per = mysqli_fetch_array($perusahaan)) {
        $no++;
      ?>
        <tr>
          <td><?= $no ?></td>
          <td><?= $per['npwp'] ?></td>
          <td><?= $per['nama_p'] ?></td>
          <td><?= $per['no_telp'] ?></td>
          <td><?= $per['alamat'] ?></td>
          <td><?= $per['email'] ?></td>
          <td><a href="h_p.php?&id_perusahaan=<?= $per['id_perusahaan'] ?>" class="btn btn-danger"><i class="fa fa-times"></i>Hapus</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>