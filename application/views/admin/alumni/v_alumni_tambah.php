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
              <li class="breadcrumb-item active"><?= $title; ?></li>
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
              <form role="form" id="quickForm" action="<?= base_url('alumni/insert'); ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nama Alumni</label>
                    <input type="text" name="nama_alumni" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="L">
                        <label class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="P">
                        <label class="form-check-label">Perempuan</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-3">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" required>
                  </div>
                  <div class="col-3">
                    <label for="">Kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control" required>
                  </div>
                  <div class="col-3">
                    <label for="">Kota</label>
                    <input type="text" name="kota" class="form-control" required>
                  </div>
                  <div class="col-3">
                    <label for="">Kode Pos</label>
                    <input type="text" name="kode_pos" class="form-control" required>
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="">Program Studi</label>
                    <input type="text" name="program_studi" class="form-control" required>
                  </div>
                  <div class="form-group row">
                    <div class="col-3">
                        <label for="">Angkatan</label>
                        <input type="text" name="angkatan" class="form-control" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-3">
                        <label for="">Tanggal Masuk</label>
                        <input type="date" class="form-control" name="tanggal_masuk" required>
                    </div>
                    <div class="col-3">
                        <label for="">Tanggal Lulus</label>
                        <input type="date" class="form-control" name="tanggal_lulus" required>
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