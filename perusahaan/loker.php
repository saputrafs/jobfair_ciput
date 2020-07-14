          <div class="box-header">
            <h3 class="box-title">Daftar Loker Perusahaan</h3>
            <?php
            $event = mysqli_query($koneksi, "SELECT * FROM event WHERE active='1'");
            if (mysqli_num_rows($event) > 0) {
              echo "<a href='index.php?page=tambah_loker' class='btn btn-primary'>Tambah Baru</a>";
            } else {
              echo "<a class='btn btn-danger'>Tidak Ada Event</a>";
            }
            ?>
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
                  <th width="200px">Settings</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                $loker = mysqli_query($koneksi, "SELECT * FROM loker,event WHERE loker.id_event=event.id_event AND id_perusahaan='$id'");
                while ($lok = mysqli_fetch_array($loker)) {
                  $no++;
                ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $lok['nama_pekerjaan'] ?></td>
                    <td><?= $lok['jenis'] ?></td>
                    <td><?= $lok['nama_event'] ?></td>
                    <td><?= $lok['kouta'] ?></td>
                    <td><a href="index.php?page=edd&id_loker=<?= $lok['id_loker'] ?>" class="btn btn-primary"><i class="fa fa-envelope"></i>Edit</a>
                      <a href="hap.php?&id_loker=<?= $lok['id_loker'] ?>" class="btn btn-danger"><i class="fa fa-times"></i>Hapus</a>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>