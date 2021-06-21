<section class="content">

  <div class="container-fluid">
    <div class="row"> 
      <div class="col-md-12 text-center mt-4">
        <h2>Data Pengelola</h2>
        <div class="row">
         <button type="button" class="btn btn-success m-4" data-toggle="modal" data-target="#modalTambah" id="tambahPasien">
          <i class="fas fa-plus-circle"></i> &nbsp;Tambah Pengelola
        </button>  
        <div class="col-md-12">
          <div><?= $this->session->flashdata('message'); ?></div>
         <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama admin</th>
                  <th>Jabatan</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                $jabatan = '';
                foreach ($admin as $ds) {
                  $no++;

                  if($ds->role_id = 2){
                    $jabatan = "pengelola";
                  }
                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?= $ds->name ?></td>
                    <td><?= $jabatan?></td>
                    <td>
                      <a href="<?php echo base_url('admin/hapusAdmin/'.$ds->id_user)?>" type="button" class="btn btn-danger btn-sm hapus" title="Hapus">
                      <i class="fas fa-trash"></i>
                    </a>
                    <button type="button" id="ubah_admin" class="btn btn-primary btn-sm hapus" title="Hapus"
                      data-toggle="modal"
                      data-target="#modalUbah"
                       data-id = "<?= $ds->id_user ?>"
                      data-nama = "<?= $ds->name ?>"
                      >
                      <i class="fas fa-edit"></i>
                    </button>
                  </td>
                </tr>
              <?php  } ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </div>
</div>
</div>
</div>


 <div class="modal fade" id="modalTambah">
  <div class="modal-dialog">
    <form class="modal-content" method="POST" action="<?php echo base_url('admin/simpanAdmin') ?>">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Admin</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="form-group">
          <label>Nama admin</label>
          <input type="text" name="nama_admin" class="form-control" placeholder="Nama admin" required>
        </div>
        <div class="form-group">
          <label>Password Default</label>
          <input type="text" name="password" class="form-control" placeholder="password" value="1234" readonly required>
        </div>
      </div>
      <div class="modal-footer text-right">
        <button type="submit" class="btn btn-info">Tambahkan</button>
      </div>
    </form>
  </div>
</div>

  <div class="modal fade" id="modalUbah">
  <div class="modal-dialog">
    <form class="modal-content" method="POST" action="">
      <div class="modal-header">
        <h4 class="modal-title">Ubah admin</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">
       <div class="form-group">
          <label>Nama admin</label>
          <input type="text" name="nama_admin" id="nama_admin" class="form-control" placeholder="Nama admin" required>
        </div>
      </div>
      <div class="modal-footer text-right">
        <button type="submit" class="btn btn-info">Edit</button>
      </div>
    </form>
  </div>
</div>

</section>