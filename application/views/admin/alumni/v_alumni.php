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
                <a href="<?= base_url('alumni/tambah'); ?>" class="btn btn-success btn-sm float-right">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Alumni</th>
                    <th>Jenis Kelamin</th>
                    <th>Program Studi</th>
                    <th>Angkatan</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Lulus</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach($alumnis as $alumni){ ?>
                    <tr>
                      <td class="text-center"><?= $no; ?></td>
                      <td><?= $alumni['nama_alumni']; ?></td>
                      <?php if($alumni['jenis_kelamin'] == "L"){ ?>
                        <td>Laki-laki</td>
                      <?php } else { ?>
                        <td>Perempuan</td>
                      <?php } ?>

                      <td><?= $alumni['program_studi'] ?></td>
                      <td><?= $alumni['angkatan'] ?></td>
                      <td><?= $alumni['tanggal_masuk'] ?></td>
                      <td><?= $alumni['tanggal_lulus'] ?></td>
                      <td>                        
                        <a href="<?= base_url().'alumni/edit/'.$alumni['id_alumni']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= base_url().'alumni/hapus/'.$alumni['id_alumni']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?');">Hapus</a>                        
                      </td>
                    </tr>
                    <?php $no++; } ?>
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