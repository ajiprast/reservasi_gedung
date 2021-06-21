<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registrasi akun anda</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background-image:url(&quot;<?= base_url('assets/dist/img/photo1.png') ?>&quot;);">
  <div class="register-box">
   <div class="card bg-gradient-navy">
    <div class="card-body register-card-body bg-transparent">
      <h3 class="login-box-msg text-white font-weight-bold">Registrasi Akun</h3>
      <div><?= $this->session->flashdata('message'); ?></div>
      <form action="<?php echo base_url(); ?>auth/registration" method="post">
          <?= form_error('name','<small class="text-danger pl-3"> ','</small>') ?>
        <div class="input-group mb-3">
          <input type="text" name="name" id="name" class="form-control" placeholder="nama lengkap">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?= form_error('email','<small class="text-danger pl-3"> ','</small>') ?>
        <div class="input-group mb-3">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?= form_error('password','<small class="text-danger pl-3"> ','</small>') ?>
        <div class="input-group mb-3">
          <input type="password" name="password1" id="password1" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
         <?= form_error('password','<small class="text-danger pl-3"> ','</small>') ?>
        <div class="input-group mb-3">
          <input type="password" name="password2" id="password2" class="form-control" placeholder="ulangi Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->

          <div class="col-12">
            <button type="submit" class="btn btn-info btn-block btn-flat swalDefaultError">
              Daftar &nbsp;<i class="fas fa-sign-in-alt"></i>
            </button>
          </div>

          <!-- /.col -->
        </div>
      </form>
      <p class="mt-4">
        <a href="#" class="btn btn-block btn-danger">
          <i class="fas fa-people mr-2"></i> Sudah Punya Akun
        </a>
      </p>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
