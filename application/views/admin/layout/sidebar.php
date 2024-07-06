<!-- <style>
  .sidebar-light-primary {
    background: linear-gradient(180deg, hsla(202, 68%, 67%, 1) 0%, hsla(168, 56%, 61%, 1) 97%);
  }
</style> -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('') ?>" class="brand-link">
      <img src="<?= base_url('assets') ?>/custom/yonsei.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Alumni</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets') ?>/custom/user.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= base_url('user/profile') ?>" class="d-block"><?php echo $this->session->userdata("nama_lengkap"); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-header">MASTER MENU</li>
          <li class="nav-item">
            <a href="<?= base_url('alumni') ?>" class="nav-link">
              <i class="fas fa-users nav-icon"></i>
              <p>Data Alumni</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('dosen') ?>" class="nav-link">
              <i class="fas fa-user nav-icon"></i>
              <p>Data Dosen</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('matkul') ?>" class="nav-link">
              <i class="fas fa-book nav-icon"></i>
              <p>Mata Kuliah</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('lulus') ?>" class="nav-link">
              <i class="nav-icon fa fa-graduation-cap"></i>
              <p>
                Kelulusan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('lulus/tampil_reuni') ?>" class="nav-link">
              <ion-icon class="nav-icon" name="thumbs-up"></ion-icon>
              <p>
                Reuni
              </p>
            </a>
          </li>
          <li class="nav-header">LAPORAN</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Daftar Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('report/data_alumni') ?>" class="nav-link">
                  <i class="fas fa-book-open nav-icon"></i>
                  <p>Laporan Alumni</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('report/data_dosen') ?>" class="nav-link">
                  <i class="nav-icon fas fa-book-open"></i>
                  <p>Laporan Dosen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('report/data_matkul') ?>" class="nav-link">
                  <i class="fas fa-book-open nav-icon"></i>
                  <p>Laporan Mata Kuliah</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">USER MANAGEMENT</li>
          <li class="nav-item">
            <a href="<?= base_url('user') ?>" class="nav-link">
              <i class="fas fa-users nav-icon"></i>
              <p>User Account</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('user/profile') ?>" class="nav-link">
            <i class="nav-icon"><img src="<?= base_url('assets') ?>/custom/user.jpeg" class="img-circle elevation-2" width="30px" alt="User Image"></i>
              <p>User Profile</p>
            </a>
          </li>
        </ul>        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->