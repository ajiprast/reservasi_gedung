<section class="content">

	<div class="container-fluid">
		<div class="row"> 
			<div class="col-md-12 text-center mt-4">
				<h2>Data Keuangan Bulan Ini</h2>
				<div class="row"> 
					<div class="col-md-12">
						<div><?= $this->session->flashdata('message'); ?></div>
						<div class="card">
							<!-- /.card-header -->
							<div class="card-body">
								<table id="" style="width: 100%" class="table table-responsive table-bordered table-striped">
									<thead>
										<tr>
											<th>NO</th>
											<th>NOMOR RESERVASI</th>
											<th>LAYANAN</th>
											<th>TANGGAL</th>
											<th>LAMA RESERVASI</th>
											<th>STATUS</th>
											<th>TOTAL BAYAR</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 0;
										foreach ($keuangan_lapor as $k) {
											$no++;
											if($k->status = 3){
												$status = 'LUNAS';
											}else{
												$status = 'BATAL SUDAH BAYAR';
											}
											?>
											<tr>
												<td><?php echo $no ?></td>
												<td><?= $k->nomor_reservasi ?></td>												
												<td><?= $k->nama_gedung?></td>
												<td><?= $k->tgl_mulai?></td>
												<td><?= $k->lama_reservasi?> hari</td>
												<td><?= $status?></td>												
												<td>Rp <?= number_format($k->total_bayar,0,'.','.')?></td>
											</tr>
										<?php  } ?>
										<tr>
											<td colspan="6">Total Pendapatan Bulan ini </td>
											<td>Rp <?php echo number_format($pendapatan_sekarang['bayar1'],0,'.','.') ?></td>
										</tr>
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
</section>