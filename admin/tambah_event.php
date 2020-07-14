<div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Buat Event Baru</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" action="simpan_event.php" method="post" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Event</label>
                    <input type="text" class="form-control" placeholder="Nama Event" name="nama_event">
                  </div>
                  <div class="box box-info">
            <!-- /.box-header -->
                <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Buka</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" name="mulai">
                </div>
              </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Tanggal Tutup</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" name="selesai">
                  </div>
              </div>
</div>
                <div class="box-footer">
                <input name="submit" type="submit" class="btn btn-primary " value="Simpan">
                </div>
              </form>
            </div>