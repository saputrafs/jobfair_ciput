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
                      <th>TTL</th>
                      <th>Jenis Kelamin</th>
                      <th>No HP</th>
                      <th>Settings</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                                $no = 0;
                                $pelamar = mysqli_query($koneksi, "SELECT * FROM pelamar WHERE id_perusahaan='$id'");
                                while ($pel = mysqli_fetch_array($pelamar)) {
                                    $no++;
                                ?>
                    <tr>
                      <td><?= $no?></td>
                      <td><?= $pel['nama_u']?></td>
                      <td><?= $pel['ttl']?></td>
                      <td><?= $pel['jekel']?></td>
                      <td><?= $pel['no_hp']?></td>
                      <td></td>
                    </tr>
                    <?php
                                }
                                ?>
                  </tbody>
                </table>
              </div>
