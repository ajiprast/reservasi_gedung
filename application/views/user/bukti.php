  <div class="services-area">
    <div class="container">
        <!-- Section-tittle -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="section-tittle text-center mb-80">
                    <h2>Bukti Tanda Reservasi</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================Blog Area =================-->
<section class="blog_area section-paddingr">
    <div class="container">
       <div class="row">
        <div class="col-12 text-center">
            <h2 class="contact-title">Data Penyewa</h2>
            <div><?= $this->session->flashdata('message'); ?></div>
        </div>
        <div class="col-lg-12">
            <form class="form-contact contact_form" action="<?php echo base_url('user/simpanSewa') ?>" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input class="form-control valid" name="nama" id="nama" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'" placeholder="Nama Lengkap" value="<?php echo $bukti['nama_penyewa'] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>NIK / NO. KTP</label>
                            <input class="form-control valid" name="nik" id="nik" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan NIK'" placeholder="Masukan NIK" value="<?php echo $bukti['nik'] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Layanan</label>
                            <input class="form-control valid" name="layanan" id="layanan" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan NIK'" placeholder="Masukan NIK" value="<?php echo $bukti['nama_gedung'] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Jumlah Total Bayar</label>
                            <input class="form-control valid" name="total_bayar" id="total_bayar" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'terisi otomatis saat menginput tanggal Akhir'" placeholder="Terisi otomatis saat menginput tanggal Akhir" value="Rp <?=  number_format($bukti['total_bayar'],0,'.','.')?>" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Tanggal Mulai</label>
                            <input class="form-control valid" name="tgl_mulai" id="tgl_mulai" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Mulai'" placeholder="tanggal mulai" value="<?php echo $bukti['tgl_mulai'] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Tanggal Selesai</label>
                            <input class="form-control valid" name="tgl_akhir" id="tgl_akhir" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'tanggal akhir'" placeholder="tanggal akhir" value="<?php echo $bukti['tgl_akhir'] ?>" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Lama Reservasi</label>
                            <input class="form-control valid" name="lama_reservasi" id="lama_reservasi" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'terisi otomatis saat menginput tanggal Akhir'" placeholder="Terisi otomatis saat menginput tanggal Akhir" value="<?php echo $bukti['lama_reservasi'] ?> hari" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                         <label>No. Handphone</label>
                         <input class="form-control" name="telepon" id="telepon" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'masukan no hp'" placeholder="masukan no hp" value="<?php echo $bukti['no_hp'] ?>" readonly>
                     </div>
                 </div>
             </div>
             <div class="form-group mt-3">
                <a href="<?php echo base_url('user/cetakBukti/'.$bukti['nomor_reservasi']) ?>" type="submit" class="button boxed-btn">cetak bukti</a>
            </div>
        </form>
    </div>
    <div class="col-lg-12 offset-lg-1">
        <div class="row mb-12 mt-5" style="text-align: center; justify-content: center;">
            <h5>Cara Konfirmasi Reservasi</h5>
        </div>
         <div class="media contact-info mt-5">
            <span class="contact-info__icon"><i class="fa fa-book"></i></span>
            <div class="media-body">
                <h3>Serahkan tanda bukti Reservasi ini ke pengelola gedung untuk mengkonfirmasi reservasi</h3>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-clock"></i></span>
            <div class="media-body">
                <h3>Apabila ada penyewa dihari yang sama maka pembayar pertama yang akan dikonfirmasi reservasi pada tanggal tersebut.</h3>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="fas fa-dollar-sign"></i></span>
            <div class="media-body">
                <h3>Jika acara dibatalkan uang tidak bisa dikembalikan ke penyewa.</h3>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="fab fa-btc"></i></span>
            <div class="media-body">
                <h3>Gunakan uang pas untuk mengonfirmasi pembayaran reservasi (tidak boleh kurang / DP).</h3>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="fas fa-sign-out-alt"></i></span>
            <div class="media-body">
                <h3>Syarat dan ketentuan bisa berubah sewaktu-waktu.</h3>
            </div>
        </div>
    </div>
</div>
</div>
</section>
    <!--================Blog Area =================-->