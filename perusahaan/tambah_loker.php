<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Buat Loker Baru</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" action="simpan_loker.php" method="post" enctype="multipart/form-data">
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Pada Event</label>
        <select name="id_event" class="form-control">
          <?php
          $event = mysqli_query($koneksi, "SELECT * FROM event WHERE active='1'");
          while ($eve = mysqli_fetch_array($event)) {
          ?>
            <option value="<?= $eve['id_event'] ?>"><?= $eve['nama_event'] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Pekerjaan</label>
        <input type="hidden" class="form-control" placeholder="Nama Kerja" name="id_perusahaan" value="<?php echo "$id"; ?>">
        <input type="text" class="form-control" placeholder="Nama Kerja" name="nama_pekerjaan">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Jenis</label>
        <select class="form-control" name="jenis">
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
                      Diskripsi Pekerjaan dan persyaratan
                    </textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Tanggal Buka</label>
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="date" name="tgl_buka">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Tanggal Tutup</label>
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>

            <input type="date" name="tgl_tutup">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Kouta Pekerja</label>
          <input type="text" class="form-control" placeholder="Kouta" name="kouta">
        </div>
      </div>
      <div class="box-footer">
        <input name="submit" type="submit" class="btn btn-primary " value="Simpan">
      </div>
  </form>
</div>