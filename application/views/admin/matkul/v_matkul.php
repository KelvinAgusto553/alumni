<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
              <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid"></div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?= $subtitle; ?></h3>
                <a href="<?= base_url('matkul/tambah'); ?>" class="btn btn-success btn-sm float-right">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th class="text-center">No.</th>
                    <th>Nama Mata Kuliah</th>
                    <th>jumlah SKS</th>
                    <th>Nama Dosen</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach($matkuls as $matkul){ ?>
                    <tr>
                        <td class="text-center"><?= $no; ?></td>
                        <td><?= $matkul['nama_matkul'] ?></td>
                        <td><?= $matkul['jml_sks'] ?></td>
                        <td><?= $matkul['nama_dosen'] ?></td>
                        <td>
                            <a href="<?= base_url()."matkul/edit/".$matkul['id_matkul']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url()."matkul/hapus/".$matkul['id_matkul']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?');">Hapus</a>
                        </td>
                    </tr>
                    <?php $no++;} ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>