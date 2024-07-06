<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('')?>">Home</a></li>
              <li class="breadcrumb-item active"><?= $subtitle; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $subtitle; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" action="<?= base_url('alumni/update'); ?>" method="post">
                <div class="card-body">
                <input type="hidden" class="form-control" name="id_alumni" value="<?= $alumni['id_alumni']; ?>">
                  <div class="form-group">
                    <label for="">Nama Alumni</label>
                    <input type="text" name="nama_alumni" class="form-control" value="<?= $alumni['nama_alumni']; ?>">
                  </div>
                  <div class="form-group">
                  <?php if($alumni['jenis_kelamin'] == "L") { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" checked>
                        <label class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="P">
                        <label class="form-check-label">Perempuan</label>
                    </div>
                    <?php } else { ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="L">
                        <label class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" checked>
                        <label class="form-check-label">Perempuan</label>
                    </div>
                    <?php } ?>
                  </div>
                  <div class="form-group row">
                    <div class="col-3">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?= $alumni['alamat']; ?>">
                  </div>
                  <div class="col-3">
                    <label for="">Kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control" value="<?= $alumni['kecamatan']; ?>">
                  </div>
                  <div class="col-3">
                    <label for="">Kota</label>
                    <input type="text" name="kota" class="form-control" value="<?= $alumni['kota']; ?>">
                  </div>
                  <div class="col-3">
                    <label for="">Kode Pos</label>
                    <input type="text" name="kode_pos" class="form-control" value="<?= $alumni['kode_pos']; ?>">
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="">Program Studi</label>
                    <input type="text" name="program_studi" class="form-control" value="<?= $alumni['program_studi']; ?>">
                  </div>
                  <div class="form-group row">
                    <div class="col-3">
                        <label for="">Angkatan</label>
                        <input type="text" name="angkatan" class="form-control" value="<?= $alumni['angkatan']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-3">
                        <label for="">Tanggal Masuk</label>
                        <input type="date" class="form-control" name="tanggal_masuk" value="<?= $alumni['tanggal_masuk']; ?>">
                    </div>
                    <div class="col-3">
                        <label for="">Tanggal Lulus</label>
                        <input type="date" class="form-control" name="tanggal_lulus" value="<?= $alumni['tanggal_lulus']; ?>">
                    </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>