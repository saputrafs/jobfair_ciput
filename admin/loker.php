<div class="box-header">
  <h3 class="box-title">Daftar Loker</h3>
  <!-- <a href="index.php?page=tambah_event"><button type="button" class="btn btn-primary">Tambah User</button></a> -->
</div>
<!-- /.box-header -->
<div class="box-body">

  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th width="30px">No</th>
        <th>Judul</th>
        <th>Jenis</th>
        <th>Event</th>
        <th>Kouta</th>
        <!-- <th width="200px">Settings</th> -->
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 0;
      $loker = mysqli_query($koneksi, "SELECT * FROM loker,event WHERE loker.id_event=event.id_event ORDER BY loker.id_loker DESC");
      while ($lok = mysqli_fetch_array($loker)) {
        $no++;
      ?>
        <tr>
          <td><?= $no ?></td>
          <td><?= $lok['nama_pekerjaan'] ?></td>
          <td><?= $lok['jenis'] ?></td>
          <td><?= $lok['nama_event'] ?></td>
          <td><?= $lok['kouta'] ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>