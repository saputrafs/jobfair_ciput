<br />
<div class="job_listing_area">
  <div class="container">
    <div class="box-header">
      <h3>Daftar Lamaran Anda</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Event</th>
            <th>Perusahaan</th>
            <th>Loker</th>
            <th>Keputusan</th>
            <th>Settings</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 0;
          $date = date("Y-m-d");
          $event = mysqli_query($koneksi, "SELECT * FROM user,lamaran,loker,event,perusahaan WHERE user.id_user=lamaran.id_user AND lamaran.id_loker=loker.id_loker AND loker.id_perusahaan=perusahaan.id_perusahaan AND loker.id_event=event.id_event AND user.id_user='$id'");
          while ($ev = mysqli_fetch_array($event)) {
            $no++;
          ?>
            <tr>
              <td><?= $no ?></td>
              <td><?= $ev['nama_event'] ?></td>
              <td><?= $ev['nama_p'] ?></td>
              <td><?= $ev['nama_pekerjaan'] ?></td>
              <td><?= $h = $ev['hasil'] ?></td>
              <td width="220px"><a href="download.php?filename=<?= $ev['cv'] ?>" class="btn btn-default"><i class="fa fa-envelope"></i>Berkas</a>
                <?php if ($h == 'tolak') {
                  echo "<a href='aw.php?id_lamaran=$ev[id_lamaran]' class='btn btn-default'><i class='fa fa-trash'>Hapus";
                } ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>