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
              <form role="form" id="quickForm" action="<?= base_url('lulus/insert'); ?>" method="post">
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-6">
                        <label for="">Nama Alumni</label>
                        <select name="alumni" class="form-control">
                            <option value="" selected>-- Pilih Alumni --</option>
                        <?php foreach ($alumni as $a) { ?>
                            <option value="<?= $a['id_alumni']; ?>"><?= $a['nama_alumni']; ?></option>
                        <?php } ?>
                        </select>
                        </div>
                        <div class="col-6">
                        <label for="">Program Studi</label>
                        <select name="alumni" class="form-control">
                            <option value="" selected>-- Program Studi --</option>
                        <?php foreach ($alumni as $a) { ?>
                            <option value="<?= $a['id_alumni']; ?>"><?= $a['program_studi']; ?></option>
                        <?php } ?>
                        </select>
                        </div>
                    </div>
                  <div class="form-group row">
                    <div class="col-6">
                    <label for="">Angkatan</label>
                        <select name="alumni" class="form-control">
                            <option value="" selected>-- Program Angkatan --</option>
                        <?php foreach ($alumni as $a) { ?>
                            <option value="<?= $a['id_alumni']; ?>"><?= $a['angkatan']; ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="">Status</label>
                        <select name="status" class="form-control">
                            <option value="" selected>-- Status --</option>
                            <option value="Lulus">Lulus</option>
                            <option value="Belum Lulus">Belum Lulus</option>
                        </select>
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