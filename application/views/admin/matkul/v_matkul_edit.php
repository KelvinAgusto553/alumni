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
              <form role="form" id="quickForm" action="<?= base_url('matkul/update'); ?>" method="post">
                <div class="card-body">
                <input type="hidden" class="form-control" name="id_matkul" value="<?= $matkul['id_matkul']; ?>">
                  <div class="form-group">
                    <label for="">Nama Mata Kuliah</label>
                    <input type="text" name="nama_matkul" class="form-control" value="<?= $matkul['nama_matkul']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="">Jumlah SKS</label>
                    <input type="text" name="jml_sks" class="form-control" value="<?= $matkul['jml_sks']; ?>">
                  </div>
                  <div class="form-group">
                        <label for="">Nama Dosen</label>
                        <select name="dosen" class="form-control">
                            <?php foreach ($dosen as $d) {
                                if($matkul['id_dosen']==$d['id_dosen']) {
                            ?>
                            <option value="<?= $d['id_dosen']; ?>" selected><?= $d['nama_dosen']; ?></option>
                            <?php } else { ?>
                            <option value="<?= $d['id_dosen']; ?>"><?= $p['nama_dosen']; ?></option>
                            <?php } } ?>
                        </select>
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