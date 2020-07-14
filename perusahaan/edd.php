<section class="content">

  <div class="row">
    <div class="col-md-3">
    </div>
    <?php
    $edd = mysqli_query($koneksi, "SELECT * FROM loker WHERE id_loker='$_GET[id_loker]'");
    if ($ed = mysqli_fetch_array($edd)) {
    ?>
      <div class="col-md-12">
        <div class="nav-tabs-custom">
          <h3 class="box-title">Settings Loker</h3>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <form class="form-horizontal" action="ed_a.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pada Event</label>
                  <select name="id_event" class="form-control">
                    <?php
                    $event = mysqli_query($koneksi, "SELECT * FROM event WHERE active='1'");
                    if ($ev = mysqli_fetch_array($event)) {
                    ?>
                      <option value="<?= $ev['id_event'] ?>"><?= $ev['nama_event'] ?></option>
                    <?php }
                    while ($eve = mysqli_fetch_array($event)) {
                    ?>
                      <option value="<?= $eve['id_event'] ?>"><?= $eve['nama_event'] ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pekerjaan</label>
                  <input type="hidden" name="id_loker" value="<?= $ed['id_loker'] ?>">
                  <input type="hidden" name="id_perusahaan" value="<?= $ed['id_perusahaan'] ?>">
                  <input type="text" class="form-control" placeholder="Nama Kerja" name="nama_pekerjaan" value="<?= $ed['nama_pekerjaan'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis</label>
                  <select class="form-control" name="jenis">
                    <option value="<?= $ed['jenis'] ?>"><?= $ed['jenis'] ?></option>
                    <option value="parttime">Partime</option>
                    <option value="fulltime">Fulltime</option>
                  </select>
                </div>
                <div class="box box-info">
                  <div class="box-header">
                    <h3 class="box-title">Diskripsi
                      <small>Tulis penjelasan Pekerjaan</small>
                    </h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body pad">
                    <textarea id="editor1" name="persyaratan" rows="10" cols="80">
                    <?= $ed['persyaratan'] ?>
                    </textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Buka</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" name="tgl_buka" value="<?= $ed['tgl_buka'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Tutup</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" name="tgl_tutup" value="<?= $ed['tgl_tutup'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kouta Pekerja</label>
                  <input type="text" class="form-control" placeholder="Kouta" name="kouta" value="<?= $ed['kouta'] ?>">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
    <?php } ?>
  </div>
  <!-- /.row -->

</section>