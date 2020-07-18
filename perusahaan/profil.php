<section class="content">

  <div class="row">
    <div class="col-md-3">
      <?php
      $profil = mysqli_query($koneksi, "SELECT * FROM perusahaan WHERE id_perusahaan='$id'");
      if ($p = mysqli_fetch_array($profil)) {
      ?>
        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="logo/<?= $p['logo'] ?>" alt="User profile picture">

            <h3 class="profile-username text-center"><?= $p['nama_p'] ?></h3>
            <!-- <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      <?php } ?>
    </div>
    <?php
    $profile = mysqli_query($koneksi, "SELECT * FROM perusahaan WHERE id_perusahaan='$id'");
    if ($pr = mysqli_fetch_array($profile)) {
    ?>
      <div class="col-md-9">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#settings" data-toggle="tab">Settings</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <form class="form-horizontal" action="update_profil.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">NPWP</label>

                  <div class="col-sm-10">
                    <input type="hidden" name="id_perusahaan" value="<?= $id ?>">
                    <input type="text" class="form-control" placeholder="NPWP" name="npwp" value="<?= $pr['npwp'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-sm-2 control-label">Nama Perusahaan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Email" name="nama_p" value="<?= $pr['nama_p'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">No Telp</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Name" name="no_telp" value="<?= $pr['no_telp'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputExperience" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?= $pr['alamat'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputSkills" class="col-sm-2 control-label">Daerah</label>
                  <div class="col-sm-10">
                    <select name="kota" class="form-control">
                      <option value="<?= $pr['kota'] ?>"><?= $pr['kota'] ?></option>
                      <option value="KUDUS">KUDUS</option>
                      <option value="PATI">PATI</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputSkills" class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-10">
                    <input type="ket" class="form-control" placeholder="" name="ket" value="<?= $pr['ket'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputSkills" class="col-sm-2 control-label">Logo</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" placeholder="" name="logo" value="<?= $pr['logo'] ?>">
                    <br />
                    <img src="logo/<?= $pr['logo'] ?>" width="150px" height="150px" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputSkills" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Email" name="email" value="<?= $pr['email'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputSkills" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Password" name="password" value="<?= $pr['password'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Simpan</button>
                  </div>
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