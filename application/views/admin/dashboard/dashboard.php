<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div style="padding-bottom:10px">
          <h3><b>Welcome, <?php echo $this->session->userdata("nama_lengkap"); ?> 😊</b></h3>
        </div>
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $total_alumni; ?></h3>

                <p>Alumni</p>
              </div>
              <div class="icon">
                <i class="ion"><ion-icon name="person"></ion-icon></i>
              </div>
              <a href="<?= base_url('alumni') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $total_matkul; ?></h3>

                <p>Mata Kuliah</p>
              </div>
              <div class="icon">
                <i class="ion"><ion-icon name="book"></ion-icon></i>
              </div>
              <a href="<?= base_url('matkul') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: blueviolet; color: white;">
              <div class="inner">
                <h3><?php echo $total_dosen; ?></h3>

                <p>Dosen</p>
              </div>
              <div class="icon">
              <i class="ion"><ion-icon name="people"></ion-icon></i>
              </div>
              <a href="<?= base_url('dosen') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $total_user; ?></h3>

                <p>User Registration</p>
              </div>
              <div class="icon">
                <i class="ion"><ion-icon name="person-add"></ion-icon></i>
              </div>
              <a href="<?= base_url('user') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
            <!-- /.card -->   
             
        
         
         