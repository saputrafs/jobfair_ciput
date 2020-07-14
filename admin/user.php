<div class="box-header">
  <h3 class="box-title">Daftar User</h3>
  <!-- <a href="index.php?page=tambah_event"><button type="button" class="btn btn-primary">Tambah User</button></a> -->
</div>
<!-- /.box-header -->
<div class="box-body">

  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>No HP</th>
        <th>Email</th>
        <th>Settings</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 0;
      $user = mysqli_query($koneksi, "SELECT * FROM user");
      while ($us = mysqli_fetch_array($user)) {
        $no++;
      ?>
        <tr>
          <td><?= $no ?></td>
          <td><?= $us['nama_u'] ?></td>
          <td><?= $us['no_hp'] ?></td>
          <td><?= $us['email'] ?></td>
          <td> <a href="h_u.php?&id_user=<?= $us['id_user'] ?>" class="btn btn-danger"><i class="fa fa-times"></i>Hapus</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>