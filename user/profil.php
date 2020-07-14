  <section class="contact-section section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <?php
          $profile = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id'");
          if ($pr = mysqli_fetch_array($profile)) {
          ?>
            <h2 class="contact-title">PROFIL ANDA</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="update_profil.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <!-- <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
                </div>
              </div> -->
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="id_user" type="hidden" value="<?= $pr['id_user'] ?>">
                  <input class="form-control" name="nik" type="text" value="<?= $pr['nik'] ?>">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" type="text" name="nama_u" value="<?= $pr['nama_u'] ?>">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="ttl" type="text" value="<?= $pr['ttl'] ?>" placeholder="Alamat">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <select class="form-control" name="jekel" value="<?= $pr['jekel'] ?>">
                    <option><?= $pr['jekel'] ?></option>
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <br />
                  <input class="form-control" name="no_hp" type="text" placeholder="No HP" value="<?= $pr['no_hp'] ?>" placeholder="No HP">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <br />
                  <label>Foto KTP</label>
                  <input class="form-control" name="ktp" type="file" value="<?= $pr['ktp'] ?>">
                  <br />
                  <img src="../ktp/<?= $pr['ktp'] ?>" width="350px" height="220px" />
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <br />
                  <input class="form-control" name="email" type="email" placeholder='Email' value="<?= $pr['email'] ?>">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="password" type="password" placeholder='Password' value="<?= $pr['password'] ?>">
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_4 boxed-btn" name="submit">SIMPAN</button>

            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3><?= $pr['ttl'] ?></h3>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><?= $pr['no_hp'] ?></h3>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><?= $pr['email'] ?></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php } ?>