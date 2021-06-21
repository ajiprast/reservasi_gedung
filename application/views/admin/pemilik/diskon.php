<section class="content">

  <div class="container-fluid">
    <div class="row"> 
      <div class="col-md-12 text-center mt-4">
        <h2>Data Diskon</h2>
        <div class="row">
         <button type="button" class="btn btn-success m-4" data-toggle="modal" data-target="#modalTambah" id="tambahPasien">
          <i class="fas fa-plus-circle"></i> &nbsp;Tambah Diskon
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
                  <th>Nama Diskon</th>
                  <th>Min Reservasi</th>
                  <th>Diskon</th>
                  <th>keterangan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                foreach ($diskon as $ds) {
                  $no++;
                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?= $ds->nama_diskon ?></td>
                    <td><?= $ds->hari ?> hari</td>
                    <td><?= $ds->diskon ?>%</td>
                    <td>
                      <button type="button" id="edit_diskon" class="btn btn-warning btn-sm edit" title="edit"  data-toggle="modal"
                      data-target="#modalUbah"
                      data-id = "<?= $ds->id_diskon ?>"
                      data-nama = "<?= $ds->nama_diskon ?>"
                      data-lama = "<?= $ds->hari ?>"
                      data-diskon = "<?= $ds->diskon ?>"
                      data-keterangan = "<?= $ds->keterangan ?>"
                      >
                      <i class="fas fa-edit"></i>
                    </button>
                    <a href="<?php echo base_url('admin/hapusDiskon/'.$ds->id_diskon) ?>" type="button" class="btn btn-danger btn-sm hapus" title="Hapus">
                      <i class="fas fa-trash"></i>
                    </a>
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
    <form class="modal-content" method="POST" action="<?php echo base_url('admin/simpanDiskon') ?>">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Diskon</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="form-group">
        <label>Nama Diskon</label>
        <input type="text" name="nama_diskon" class="form-control" placeholder="Nama Diskon" required>
      </div>
      <div class="form-group">
        <label>Lama Diskon</label>
        <input type="number" name="lama_diskon" class="form-control" placeholder="Lama Diskon" required>
      </div>
      <div class="form-group">
        <label>Diskon</label>
        <input type="number" name="diskon"  class="form-control" placeholder="Diskon" required>
      </div>
      <div class="form-group">
        <label>Keterangan</label>
        <textarea type="text" name="keterangan" class="form-control" placeholder="Keterangan" required></textarea>
      </div>
    </div>
    <div class="modal-footer text-right">
      <button type="submit" class="btn btn-info">Tambah</button>
    </div>
  </form>
</div>
</div>

<div class="modal fade" id="modalUbah">
  <div class="modal-dialog">
    <form class="modal-content" method="POST" action="">
      <div class="modal-header">
        <h4 class="modal-title">Ubah Diskon</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="form-group">
        <label>Nama Diskon</label>
        <input type="text" name="nama_diskon" id="nama_diskon" class="form-control" placeholder="Nama Diskon" required>
      </div>
      <div class="form-group">
        <label>Lama Diskon</label>
        <input type="text" name="lama_diskon" id="lama_diskon" class="form-control" placeholder="Lama Diskon" required>
      </div>
      <div class="form-group">
        <label>Diskon</label>
        <input type="text" name="diskon" id="diskon" class="form-control" placeholder="Diskon" required>
      </div>
      <div class="form-group">
        <label>Keterangan</label>
        <textarea type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Lama Diskon" required></textarea>
      </div>
      <div class="modal-footer text-right">
        <button type="submit" class="btn btn-info">Edit</button>
      </div>
    </form>
  </div>
</div>

</section>