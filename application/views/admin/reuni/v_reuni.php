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
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Alumni</th>
                    <th>Program Studi</th>
                    <th>Angkatan</th>
                    <th>Status</th>
                    <th class="text-center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach($luluss as $lulus){ ?>
                    <tr>
                      <td class="text-center"><?= $no; ?></td>
                      <td><?= $lulus['nama_alumni']; ?></td>
                      <td><?= $lulus['program_studi'] ?></td>
                      <td><?= $lulus['angkatan'] ?></td>
                      <td><?= $lulus['status'] ?></td>
                      <td class="text-center">                        
                        <a href="<?= base_url(); ?>lulus/print/<?= $lulus['id_lulus']; ?>" class="btn btn-success">Cetak</a>                        
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