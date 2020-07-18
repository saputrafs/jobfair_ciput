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
            <th>Keputusan Anda</th>
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
              <td>
              <?php if ($ev['hasil'] == 'terima') {
              echo "<a href='setuju.php?id_lamaran=$ev[id_lamaran]&id_loker=$ev[id_loker]' class='btn btn-default'><i class='fa fa-thumbs-o-up'>Terima</i>";
              echo "<a href='aw.php?id_lamaran=$ev[id_lamaran]' class='btn btn-default'><i class='fa fa-times-circle'>Batal</i>";
            }elseif ($ev['hasil'] == 'setuju') {
              echo "<a class='btn btn-default'><i class='fa fa-thumbs-o-up'>Anda Telah $ev[hasil]</i>";
            }elseif ($ev['hasil'] == '') {
              echo "<a class='btn btn-default'><i class='fa fa-refresh'>Sedang Diproses</i>";
            }  else {
              echo "<a class='btn btn-default'><i class='fa fa-times-circle'>Maaf anda $ev[hasil]</i>";
               } ?>
              </td>
              <td width="220px">
              <a href="download.php?filename=<?= $ev['cv'] ?>" class="btn btn-default"><i class="fa fa-envelope"></i>Berkas</a>
               </td>
            </tr>
              <?php } ?>
        </tbody>
      </table>
    </div>
                <!-- echo "<a href='aw.php?id_lamaran=$ev[id_lamaran]' class='btn btn-default'><i class='fa fa-trash'>Hapus"; -->