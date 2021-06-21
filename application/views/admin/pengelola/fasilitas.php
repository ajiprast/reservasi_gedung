<section class="content">

<div class="container-fluid">
<div class="row">
	<div class="col-md-12 text-center">
	<h2>Fasilitas</h2>
	<div><?= $this->session->flashdata('message'); ?></div><br>
	 <form action="<?= base_url('Pengelola/tambahFasilitas'); ?>" method="post">
	<div class="row">
		<div class="col-md-4">
		<div class="form-group">
			<label>Layanan</label>
			<input type="text" id="layanan" name="layanan" class="form-control" placeholder="Jenis Layanan" >
		</div>
		</div>
		<div class="col-md-4">
		<div class="form-group">
			<label>Fasilitas</label>
			<input type="text" id="fasilitas" name="fasilitas" class="form-control" placeholder="Fasilitas Gedung">
		</div>
		</div>
		<div class="col-md-4">
		<div class="form-group">
			<label>Harga</label>
			<input type="text" id="harga" name="harga" class="form-control" placeholder="Harga Reservasi">
		</div>
		</div>
		<div class="col-md-12">
		<div class="form-group">
			<button type="button" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah
			</button> 
		</div>
		</div>
	</div>
	 </form>
	</div>
</div>

<div class="row" id="tampil">
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>LAYANAN</th>
					<th>FASILITAS</th>
					<th>HARGA</th>
				</tr>
			</thead>
			<tbody>
			
			</tbody>
		</table>
	</div>

</div>
</div>
</section>