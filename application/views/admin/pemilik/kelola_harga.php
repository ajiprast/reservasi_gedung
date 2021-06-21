<section class="content">

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<button type="button" class="btn btn-success m-4" data-toggle="modal" data-target="#modalTambah">
					<i class="fas fa-plus-circle"></i> &nbsp;Tambah Layanan
				</button> 
				<div><?= $this->session->flashdata('message'); ?></div>
			</div>
			<?php foreach ($harga as $h) {
					# code...
				?>
				<div class="col-md-6 text-center">
					<div class="card">
						<!-- /.card-header -->
						<div class="card-body">
							<div class="h4">Layanan  <?php echo $h->nama_gedung ?></div>
							<div class="h4">Rp <?php echo number_format($h->harga_reservasi,0,'.','.') ?>/hari</div>
							<div class="row mt-4">
								<h3>Fasilitas :</h3>
								
							</div>
							<div class="row">
								<p><?php echo $h->fasilitas ?></p>
							</div>
						</div>
						<div class="card-footer">
							<button type="button" class="btn btn-primary m-4" data-toggle="modal" data-target="#modalUbah" id="editHarga"
							data-id="<?php echo $h->id_gedung ?>" data-fasilitas="<?php echo $h->fasilitas ?>" data-nama="<?php echo $h->nama_gedung?>" data-harga = "<?php echo $h->harga_reservasi ?>">
							<i class="fas fa-edit"></i> &nbsp;Edit Layanan
						</button> 
						<a href="<?php echo base_url('admin/hapusHarga/'.$h->id_gedung) ?>" type="button" class="btn btn-danger m-4">
							<i class="fas fa-trash"></i> &nbsp;Hapus Layanan
						</a> 
					</div>
					<!-- /.card-body -->
				</div>
			</div>
		<?php } ?>
	</div>
</div>
</section>

<div class="modal fade" id="modalUbah">
	<div class="modal-dialog">
		<form class="modal-content" method="POST" action="">
			<div class="modal-header">
				<h4 class="modal-title">Edit Gedung</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label>Nama Gedung</label>
					<input type="text" name="nama_gedung" id="nama_gedung" class="form-control" placeholder="Nama Gedung" required>
				</div>
				<div class="form-group">
					<label>Harga Reservasi</label>
					<input type="number" name="harga" id="harga" class="form-control" placeholder="Harga Reservasi" value="" required>
				</div>
				<div class="form-group">
					<label>Fasilitas</label>
					<textarea type="number" name="fasilitas" id="fasilitas" class="form-control" placeholder="masukan Fasilitas" value="" required></textarea>
				</div>
			</div>
			<div class="modal-footer text-right">
				<button type="submit" class="btn btn-info">Edit</button>
			</div>
		</form>
	</div>
</div>

<div class="modal fade" id="modalTambah">
	<div class="modal-dialog">
		<form class="modal-content" method="POST" action="<?php echo base_url('admin/simpanHarga') ?>">
			<div class="modal-header">
				<h4 class="modal-title">Edit Gedung</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label>Nama Gedung</label>
					<input type="text" name="nama_gedung" class="form-control" placeholder="Nama Gedung" required>
				</div>
				<div class="form-group">
					<label>Harga Reservasi</label>
					<input type="number" name="harga" class="form-control" placeholder="Harga Reservasi" value="" required>
				</div>
				<div class="form-group">
					<label>Fasilitas</label>
					<textarea type="number" name="fasilitas" class="form-control" placeholder="masukan Fasilitas" value="" required></textarea>
				</div>
			</div>
			<div class="modal-footer text-right">
				<button type="submit" class="btn btn-info">Tambahkan</button>
			</div>
		</form>
	</div>
</div>