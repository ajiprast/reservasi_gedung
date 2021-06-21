<section class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 text-center">
        <div><?= $this->session->flashdata('message'); ?></div>
        <div class="card m-4">
        <div class="card-header">
          <h3 class="card-title">Ganti Password</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form  method="POST" action="<?php echo base_url('auth/simpanPassword'); ?>" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label>Nama Pengelola</label>
                 <input type="hidden" name="id_user" class="form-control" id="id_user" placeholder="Nama pengelola" value="<?php echo $admin['id_user'] ?>" readonly required>
                <input type="text" name="nama_pengelola" class="form-control" id="nama_pengelola" placeholder="Nama pengelola" value="<?php echo $admin['name'] ?>" readonly required>
              </div>
              <div class="form-group">
                <label>Password Lama</label>
                <input type="password" name="password1" class="form-control" placeholder="Password Lama" value=""  required>
              </div>
              <div class="form-group">
                <label>Password Baru</label>
                <input type="password" name="password2" class="form-control" placeholder="Password Baru" value=""  required>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer"> 
              <button type="submit" class="btn btn-primary">Ubah Password</button>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
  </section>