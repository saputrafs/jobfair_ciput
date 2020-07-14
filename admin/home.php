<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <?php
        $nontifi = mysqli_query($koneksi, "SELECT COUNT(*) FROM event WHERE active='1'");
        if ($non = mysqli_fetch_row($nontifi)) {
        ?>
          <h3><?php echo $non[0] ?></h3>
          </a>
        <?php
        }
        ?>
        <p>Event Berlangsung</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <?php
        $nontifi = mysqli_query($koneksi, "SELECT COUNT(*) FROM loker");
        if ($non = mysqli_fetch_row($nontifi)) {
        ?>
          <h3><?php echo $non[0] ?></h3>
          </a>
        <?php
        }
        ?>
        <p>Loker</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <?php
        $nontifi = mysqli_query($koneksi, "SELECT COUNT(*) FROM user");
        if ($non = mysqli_fetch_row($nontifi)) {
        ?>
          <h3><?php echo $non[0] ?></h3>
          </a>
        <?php
        }
        ?>
        <p>User</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <?php
        $nontifi = mysqli_query($koneksi, "SELECT COUNT(*) FROM perusahaan");
        if ($non = mysqli_fetch_row($nontifi)) {
        ?>
          <h3><?php echo $non[0] ?></h3>
          </a>
        <?php
        }
        ?>
        <p>Perusahaan</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>

<div class="box-header">
  <h3 class="box-title">Daftar Event</h3>
  <a href="index.php?page=tambah_event"><button type="button" class="btn btn-primary">Tambah Event</button></a>
</div>
<!-- /.box-header -->
<div class="box-body">

  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Event</th>
        <th>Mulai</th>
        <th>Tutup</th>
        <th>Settings</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 0;
      $date = date("Y-m-d");
      $event = mysqli_query($koneksi, "SELECT * FROM event");
      while ($ev = mysqli_fetch_array($event)) {
        $no++;
      ?>
        <tr>
          <td><?= $no ?></td>
          <td><?= $ev['nama_event'] ?></td>
          <td><?= $ev['mulai'] ?></td>
          <td><?= $ev['selesai'] ?></td>
          <td><?php
              $ids = $ev['id_event'];
              $s = $ev['selesai'];
              if ($date < $s) {
                echo "<button type='button' class='btn btn-success'>Active</button>";
                $koneksi->query("UPDATE event SET 
                        active         = '1'
                    WHERE id_event = $ids ");
              } else {
                echo "<button type='button' class='btn btn-danger'>Expired</button>";
                $koneksi->query("UPDATE event SET 
                          active         = '0'
                      WHERE id_event = $ids ");
              }
              ?>
            <a href="index.php?page=edit_event&id_event=<?php echo $ev['id_event'] ?>"><button type="button" class="btn btn-primary">Edit</button></a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>