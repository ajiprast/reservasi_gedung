 <main>

    <!-- Best Pricing Start -->
    <section class="best-pricing best-pricing2 pricing-padding2">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 col-md-8 text-center">
                   <div><?= $this->session->flashdata('message'); ?></div>
                   <div class="section-tittle text-center mb-80">
                    <h4>Cari Info Reservasi</h4>
                </div>
                <form class="form-contact contact_form" action="<?php echo base_url('user/bukti') ?>" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nomor Penyewa</label>
                                <input style="color: #000" class="form-control valid" name="nomor" id="nomor" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Penyewa'" placeholder="Nomor Penyewa" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nik</label>
                                <input class="form-control valid" name="nik" id="nik" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NIK'" placeholder="NIK" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <a  class="button boxed-btn" id="cari">Cari</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Best Pricing End -->
<!-- Pricing Card Start -->

<!-- Pricing Card End -->
<!-- Available App  Start-->
<div class="available-app-area">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-xl-5 col-lg-6">
                <div class="app-caption">
                    <div class="section-tittle section-tittle3">
                        <h2>Kami akan melayani anda dengan sebaik mungkin</h2>
                        <p>selamat menyewa dan semoga anda puas dengan pelayanan kami</p>
                                <!-- <div class="app-btn">
                                    <a href="#" class="app-btn1"><img src="<?php echo base_url('assets/') ?>assets/img/shape/app_btn1.png" alt=""></a>
                                    <a href="#" class="app-btn2"><img src="<?php echo base_url('assets/') ?>assets/img/shape/app_btn2.png" alt=""></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="app-img">
                            <img src="<?php echo base_url('assets/') ?>assets/img/shape/available-app.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape -->
            <div class="app-shape">
                <img src="<?php echo base_url('assets/') ?>assets/img/shape/app-shape-top.png" alt="" class="app-shape-top heartbeat d-none d-lg-block">
                <img src="<?php echo base_url('assets/') ?>assets/img/shape/app-shape-left.png" alt="" class="app-shape-left d-none d-xl-block">
                <!-- <img src="<?php echo base_url('assets/') ?>assets/img/shape/app-shape-right.png" alt="" class="app-shape-right bounce-animate "> -->
            </div>
        </div>
        <!-- Available App End-->

        <!-- Say Something Start -->
        <div class="say-something-aera pt-90 pb-90 fix">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="offset-xl-1 offset-lg-1 col-xl-5 col-lg-5">
                        <div class="say-something-cap">
                            <h2>Hubungi Kami Jika Anda Terkendala dalam pemesanan</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3">
                        <div class="say-btn">
                            <a href="#" class="btn radius-btn">hubungi kami</a>
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