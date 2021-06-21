 <main>

        <!-- Best Pricing Start -->
        <section class="best-pricing best-pricing2 pricing-padding2">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="section-tittle text-center">
                            <h2>Dapatkan Diskon Menarik Disini.</h2>
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
                    <?php foreach ($diskon as $key => $value) {
                        # code...
                     ?>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <span><?php echo $value->nama_diskon ?></span>
                                <h4><?php echo $value->diskon ?>%<span>/ <?php echo $value->hari ?> hari</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li><?php echo $value->keterangan ?><li>
                                </ul>
                                <a href="<?php echo base_url('user/sewa/0') ?>" class="btn card-btn1">Mulai Reservasi</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
        <!-- Pricing Card End -->
        
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
                            <h2>Hubungi Kami jika anda terkendala dalam pemesanan.</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3">
                        <div class="say-btn">
                            <a href="#" class="btn radius-btn">Hubungi kami</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shape -->
            <div class="say-shape">
                <img src="assets/img/shape/say-shape-left.png" alt="" class="say-shape1 rotateme d-none d-xl-block">
                <img src="assets/img/shape/say-shape-right.png" alt="" class="say-shape2 d-none d-lg-block">
            </div>
        </div>
        <!-- Say Something End -->
     
    </main>