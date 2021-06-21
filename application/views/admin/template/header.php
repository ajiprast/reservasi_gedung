<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>reservasi gedung ha djunaid convention</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
   <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/') ?>assets/img/logo/logo9.png"">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-navy navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <?php  if($this->session->userdata['role_id'] == 1){  ?>
          <a href="<?php echo base_url('admin') ?>" class="nav-link">Home</a>
        <?php }else{ ?>
           <a href="<?php echo base_url('pengelola') ?>" class="nav-link">Home</a>
         <?php } ?>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo base_url('auth/logout') ?>" class="nav-link">Logout</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-navy elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url() ?>/assets/index3.html" class="brand-link">
        <img src="<?= base_url() ?>/assets/dist/img/avatar.png"
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo $this->session->userdata['nama'] ?></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <?php

          $id_user = $this->session->userdata['id_user'];

           if($this->session->userdata['role_id'] == 1){  ?>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="<?php echo base_url('admin') ?>" class="nav-link <?php echo $kk == 'index' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/diskon') ?>" class="nav-link <?php echo $kk == 'diskon' ? 'active' : '' ?>">
              <i class="nav-icon fab fa-btc"></i>
              <p>
                Kelola Diskon
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/kelolaHarga') ?>" class="nav-link <?php echo $kk == 'harga' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Kelola Layanan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/laporan_keuangan') ?>" class="nav-link <?php echo $kk == 'keuangan' ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Laporan Keuangan
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="<?php echo base_url('admin/kelola_admin') ?>" class="nav-link <?php echo $kk == 'admin' ? 'active' : '' ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Kelola Pengelola
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url('auth/gantiPassword/'.$id_user) ?>" class="nav-link <?php echo $kk == 'gantiPassword' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Ganti Password
              </p>
            </a>
          </li>
        </ul>
        <?php }else { ?>

          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             <li class="nav-item">
            <a href="<?php echo base_url('pengelola') ?>" class="nav-link  <?php echo $kk == 'beranda' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="<?php echo base_url('pengelola/kelola_penyewa') ?>" class="nav-link  <?php echo $kk == 'kelolaPenyewa' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Kelola Pelanggan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('pengelola/fasilitas') ?>" class="nav-link  <?php echo $kk == 'fasilitas' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Kelola Fasilitas
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="<?php echo base_url('auth/gantiPassword/'.$id_user) ?>" class="nav-link <?php echo $kk == 'gantiPassword' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p> Ganti Password</p>
            </a>
          </li>
        </ul>
      <?php } ?>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">