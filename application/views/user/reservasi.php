  <!-- Slider Area Start-->
  <div class="services-area">
    <div class="container">
        <!-- Section-tittle -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="section-tittle text-center mb-80">
                    <h2>Input Form Reservasi</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Area End-->

<!--================Blog Area =================-->
<section class="blog_area section-paddingr">
    <div class="container">
       <div class="row">
        <div class="col-12">
            <h2 class="contact-title">Masukan Data Pelanggan</h2>
            <div><?= $this->session->flashdata('message'); ?></div>
        </div>
        <div class="col-lg-8">
            <form class="form-contact contact_form" action="<?php echo base_url('user/simpanSewa') ?>" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input class="form-control valid" name="nama" id="nama" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'" placeholder="Nama Lengkap" required>
                             <input class="form-control valid" name="nomor_reservasi" id="nomor_reservasi" type="hidden" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'" placeholder="Nama Lengkap" value="<?php echo $kode ?>" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>NIK / NO. KTP</label>
                            <input class="form-control valid" name="nik" id="nik" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan NIK'" placeholder="Masukan NIK" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group ml-3">
                            <label>Pilih Layanan</label>
                            <div class="row">
                            <select class="form-control valid select2" name="gedung" id="gedung">
                                <?php foreach ($harga1 as $key => $value) {
                                    # code...
                                ?>
                                <option value="<?php echo $value->id_gedung ?>" <?= $value->id_gedung == $gedung_id ? 'selected' : ''; ?> > <?= $value->nama_gedung ?></option>
                            <?php } ?>
                            </select>
                            </div>
                        </div>
                    </div>
                       <div class="col-sm-6">
                        <div class="form-group">
                            <label>Harga Sebelum Diskon</label>
                            <input class="form-control valid" name="total_bayar" id="total_bayar" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'terisi otomatis saat menginput tanggal Akhir'" placeholder="Terisi otomatis saat menginput tanggal Akhir" value="Rp <?=  number_format($harga['harga_reservasi'],0,'.','.')?>" readonly required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Tanggal Mulai</label>
                            <input class="form-control valid" name="tgl_mulai" id="tgl_mulai" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Mulai'" placeholder="tanggal mulai" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Tanggal Akhir</label>
                            <input class="form-control valid" name="tgl_akhir" id="tgl_akhir" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'tanggal akhir'" placeholder="tanggal akhir" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Lama Reservasi</label>
                            <input class="form-control valid" name="lama_reservasi" id="lama_reservasi" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'terisi otomatis saat menginput tanggal Akhir'" placeholder="Terisi otomatis saat menginput tanggal Akhir" readonly required>
                            <input class="form-control valid" name="lama_reservasi1" id="lama_reservasi1" type="hidden" onfocus="this.placeholder = ''" onblur="this.placeholder = 'terisi otomatis saat menginput tanggal Akhir'" placeholder="Terisi otomatis saat menginput tanggal Akhir" readonly required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Diskon</label>
                            <input class="form-control valid" name="diskon" id="diskon" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'terisi otomatis saat menginput tanggal Akhir'" placeholder="Terisi otomatis saat menginput tanggal Akhir" readonly required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Harga Setelah Diskon</label>
                            <input class="form-control valid" name="bayarTampil" id="bayarTampil" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'terisi otomatis saat menginput tanggal Akhir'" placeholder="Terisi otomatis saat menginput tanggal Akhir" readonly required>

                            <input class="form-control valid" name="bayar" id="bayar" type="hidden" onfocus="this.placeholder = ''" onblur="this.placeholder = 'terisi otomatis saat menginput tanggal Akhir'" placeholder="Terisi otomatis saat menginput tanggal Akhir" readonly required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                         <label>No. Handphone</label>
                         <input class="form-control" name="telepon" id="telepon" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'masukan no hp'" placeholder="masukan no hp" required>
                     </div>
                 </div>
                 <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control w-100" name="keterangan" id="keterangan" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'tambahkan keterangan acara'" placeholder="masukan keterangan acara"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="button boxed-btn">Reservasi Gedung</button>
            </div>
        </form>
    </div>
    <div class="col-lg-3 offset-lg-1">
        <div class="row mb-4" style="text-align: center; justify-content: center;">
            <h5>Syarat & Ketentuan Reservasi</h5>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-clock"></i></span>
            <div class="media-body">
                <h3>Lama reservasi minimal 1 hari dihitung dari tanggal mulai.</h3>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="fas fa-home"></i></span>
            <div class="media-body">
                <h3>Lama reservasi sudah dihitung dengan persiapan acara.</h3>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="fas fa-user"></i></span>
            <div class="media-body">
                <h3>Jika ada penyewa dihari yang sama maka penyewa yang membayar terlebih dahulu yang diterima.</h3>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="fas fa-sign-out-alt"></i></span>
            <div class="media-body">
                <h3>Apabila pada hari yang sudah dibooking acara dibatalkan uang tidak bisa dikembalikan.</h3>
            </div>
        </div>
         <div class="media contact-info">
            <span class="contact-info__icon"><i class="fab fa-btc"></i></span>
            <div class="media-body">
                <h3>Diskon otomatis terisi sesuai dengan durasi reservasi</h3>
            </div>
        </div>
    </div>
</div>
</div>
</section>
    <!--================Blog Area =================-->