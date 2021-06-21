 <main>

    <!-- Slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 col-md-9 ">
                            <div class="hero__caption">
                                <span data-animation="fadeInUp" data-delay=".4s">Dapatkan Diskon Menarik</span>
                                <h1 data-animation="fadeInUp" data-delay=".6s"><span style="font-size: 24px; text-transform:capitalize;">hingga</span> <?php echo $diskon['diskon'] ?>%</h1>
                                <p data-animation="fadeInUp" data-delay=".8s">untuk Minimal Reservasi <?php echo $diskon['hari'] ?> Hari</p>
                                <!-- Slider btn -->
                                <div class="slider-btns">
                                    <!-- Hero-btn -->
                                    <a data-animation="fadeInLeft" data-delay="1.0s" href="<?php echo base_url('user/paket') ?>" class="btn radius-btn">Lihat Semua Promo</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                                <img src="<?php echo base_url('assets/') ?>assets/img/hero/building.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <!-- Slider Area End -->

    <!-- Best Pricing Start -->
    <section class="best-pricing pricing-padding" data-background="<?php echo base_url('assets/') ?>assets/img/gallery/best_pricingbg.jpg">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-tittle section-tittle2 text-center">
                        <h2>Pilih Fasilitas</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Best Pricing End -->
    <!-- Pricing Card Start -->
    <div class="pricing-card-area">
        <div class="container">
            <div class="row">
                <?php
                foreach ($gedung as $d) : 

                   $harga = number_format($d->harga_reservasi,0,'.','.'); ?>
                   <div class="col-xl-4 col-lg-4 col-md-6" style="display: flex; flex-wrap:wrap">
                    <div class="single-card text-center mb-30" style="width: 100%">
                        <div class="card-top">
                            <span><?= $d->nama_gedung ?></span>
                            <h4 style="font-size: 30px">Rp <span><?= $harga ?></span><span>/hari</span></h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>Dapatkan Diskon Hingga <?php echo $diskon['diskon'] ?>%</li>
                                <li>Minimal Reservasi <?php echo $diskon['hari'] ?> hari</li>
                                <li><span style="font-size: 18px; font-weight:500">Fasilitas : </span><?php echo $d->fasilitas ?></li>
                            </ul>
                            <a href="<?php echo base_url('user/sewa/'.$d->id_gedung) ?>" class="btn card-btn1">Reservasi</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- Pricing Card End -->

<!-- Our Customer Start -->
<div class="our-customer section-padd-top30">
    <div class="container-fluid">
        <div class="our-customer-wrapper">
            <!-- Section Tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-8">
                    <div class="section-tittle text-center">
                        <h2>testimoni<br> customer kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="customar-active dot-style d-flex dot-style">
                     <?php foreach ($testi as $t) {
                                    # code...
                       ?>
                       <div class="single-customer mb-100">
                        <div class="what-img">
                            <img src="<?php echo base_url('assets/') ?>assets/img/shape/man1.png" alt="">
                        </div>
                        <div class="what-cap">
                            <h4><a href="#"><?php echo $t->nama_pelanggan ?></a></h4>
                            <h5>Layanan : <?php echo $t->nama_gedung ?></h5>
                            <p><?php echo $t->testi ?></p>
                        </div>
                    </div>

                <?php } ?>


                <div class="single-customer mb-100">
                    <div class="what-img">
                        <img src="<?php echo base_url('assets/') ?>assets/img/shape/man2.png" alt="">
                    </div>
                    <div class="what-cap">
                        <h4><a href="#">ANDRI</a></h4>
                          <h5>Layanan : ACARA MALAM</h5>
                        <p>Kesan saya sangat puas dengan pelayanan dan informasi yang diberikan sangat jelas dan sangat membantu</p>
                    </div>
                </div>
                 <div class="single-customer mb-100">
                    <div class="what-img">
                        <img src="<?php echo base_url('assets/') ?>assets/img/shape/man2.png" alt="">
                    </div>
                    <div class="what-cap">
                        <h4><a href="#">ANDRI</a></h4>
                          <h5>Layanan : ACARA MALAM</h5>
                        <p>Kesan saya sangat puas dengan pelayanan dan informasi yang diberikan sangat jelas dan sangat membantu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>           
<!-- Our Customer End -->
    
     <!-- Available App  Start-->
        <div class="available-app-area mt-50">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="app-caption">
                            <div class="section-tittle section-tittle3">
                                <h2>Tuliskan Testimoni Anda disini</h2>
                                <p>Bagikan kesan dan pesan baik anda setelah menyewa gedung di ha Djunaid convention </p>
                                <div class="app-btn">
                                    <a href="#" class="app-btn1"><img src="assets/img/shape/app_btn1.png" alt=""></a>
                                    <a href="#" class="app-btn2"><img src="assets/img/shape/app_btn2.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <form class="form-contact contact_form" action="<?php echo base_url('user/testimoni') ?>" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label style="color: white; font-weight: 500">Nomor Pelanggan</label>
                                    <input style="color: white" class="form-control valid" name="nomorTesti" id="" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Penyewa'" placeholder="Nomor Penyewa" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label style="color: white; font-weight: 500">Nik</label>
                                    <input style="color: white" class="form-control valid" name="nikTesti" id="" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NIK'" placeholder="NIK" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label style="color: white; font-weight: 500">Testimoni</label>
                                    <textarea  style="height: 150px !important; color:white"class="form-control valid" name="testi" id="" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tuliskan Pesan dan Kesan Anda'" placeholder="Tuliskan Pesan dan Kesan Anda" required></textarea>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit"  class="button boxed-btn">Beri Testimoni</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Shape -->
            <div class="app-shape">
                <img src="assets/img/shape/app-shape-top.png" alt="" class="app-shape-top heartbeat d-none d-lg-block">
                <img src="assets/img/shape/app-shape-left.png" alt="" class="app-shape-left d-none d-xl-block">
                <!-- <img src="assets/img/shape/app-shape-right.png" alt="" class="app-shape-right bounce-animate "> -->
            </div>
        </div>
        <!-- Available App End-->


        <!-- Say Something Start -->
        <div class="say-something-aera pt-90 pb-90 fix">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="offset-xl-1 offset-lg-1 col-xl-5 col-lg-5">
                        <div class="say-something-cap">
                            <h2>Hubungi Kami, kami siap 24 jam</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3">
                        <div class="say-btn">
                            <a href="#" class="btn radius-btn">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shape -->
            <div class="say-shape">
                <img src="<?php echo base_url('assets/') ?>assets/img/shape/say-shape-left.png" alt="" class="say-shape1 rotateme d-none d-xl-block">
                <img src="<?php echo base_url('assets/') ?>assets/img/shape/say-shape-right.png" alt="" class="say-shape2 d-none d-lg-block">
            </div>
        </div>
        <!-- Say Something End -->

    </main>