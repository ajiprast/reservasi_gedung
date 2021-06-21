<section class="content">
 
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Cari Data Penyewa</h2>
        <div><?= $this->session->flashdata('message'); ?></div>
        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <label>Nomor Reservasi</label>
              <input type="text" id="nomor" name="no_sewa" class="form-control" placeholder="Masukan Nomor Reservasi" >
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
              <label>NIK</label>
              <input type="text" id="nik" name="nik" class="form-control" placeholder="masukan NIK Pelanggan">
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <button type="button" class="btn btn-primary m-4" id="cariPenyewa"> <i class="fas fa-search"></i> &nbsp;cari
              </button> 
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row" id="tampil">

    </div>
  </div>
</section>