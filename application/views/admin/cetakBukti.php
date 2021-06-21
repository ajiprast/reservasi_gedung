<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Reservasi Gedung Ha Djunaid Convention</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
  <!-- Site wrapper -->
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h3>Bukti Pembayaran Reservasi</h3>
      </div>
      <div class="col-md-12 text-center">
        <h4>Gedung Ha Djunaid Convention Pekalongan</h4>
      </div>
    </div><hr>
    <div class="row  mt-5">
      <div class="col-md-5" style="right: 0">
        <h5>NOMOR RESERVASI </h5>
        <h5>NIK </h5>
        <h5>NAMA PENYEWA</h5>
        <h5>NO HP </h5>
        <h5>LAYANAN</h5>
        <h5>TANGGAL MULAI</h5>
        <h5>TANGGAL SELESAI </h5>
        <h5>LAMA RESERVASI </h5>
        <h5>TOTAL BAYAR </h5>
        <h5>STATUS </h5>
      </div>
      <div class="col-md-4">
        <?php if($bukti['status'] == 1){
          $status = 'Belum Bayar';
        }else if($bukti['status'] == 2){
          $status = 'Dibatalkan';
        }else{
          $status = 'Lunas';
        } ?>
        <h5> : &nbsp <?php echo $bukti['nomor_reservasi'] ?> </h5>
        <h5> : &nbsp <?php echo $bukti['nik'] ?> </h5>
        <h5 style="text-transform: capitalize;"> : &nbsp <?php echo $bukti['nama_pelanggan'] ?> </h5>
        <h5> : &nbsp <?php echo $bukti['no_hp'] ?></h5>
        <h5 style="text-transform: capitalize;"> : &nbsp <?php echo $bukti['nama_gedung'] ?> </h5>
        <h5> : &nbsp <?php echo $bukti['tgl_mulai'] ?></h5>
        <h5> : &nbsp <?php echo $bukti['tgl_akhir'] ?> </h5>
        <h5> : &nbsp <?php echo $bukti['lama_reservasi'] ?> hari</h5>
        <h5> : &nbsp Rp <?php echo number_format($bukti['total_bayar'],0,'.','.') ?> </h5>
        <h5> : &nbsp <?php echo $status ?> </h5>

      </div>
    </div>
    <div class="row mt-5 text-center">
      <div class="col-md-8"></div>
      <div class="col-md-4">
        <p>Pekalongan, <?=date('d M Y')?></p>
        <?php if($this->session->userdata['nama'] == ''){ ?>
        <p>TTD Penyewa Gedung</p>
      <?php }else{ ?>
         <p>TTD Pengelola Gedung</p>
       <?php } ?>
        <p>&nbsp</p>
        <p>&nbsp</p>
        <p>&nbsp</p>
        <?php if($this->session->userdata['nama'] == ''){ ?>
        <p style="text-transform: capitalize;"><?php echo $bukti['nama_pelanggan'] ?></p>
      <?php }else{ ?>
         <p style="text-transform: capitalize;"><?php echo $this->session->userdata['nama'] ?></p>
       <?php } ?>
      </div>
    </div>

    <div class="row" style="margin-top: 150px">
      <div class="col-md-12">
        <p>** catatan</p>
        <?php if ($this->session->userdata['nama'] == ''): ?>
        <p style="font-weight: 200">- Serahkan tanda bukti reservasi ini ke pengelola gedung untuk mengkonfirmasi reservasi.</p>
        <p style="font-weight: 200">- Apabila ada penyewa dihari yang sama maka pembayar pertama yang akan dikonfirmasi reservasi pada tanggal tersebut.</p>
        <p style="font-weight: 200">- Jika acara dibatalkan uang tidak bisa dikembalikan ke penyewa.</p>
        <p style="font-weight: 200">- Gunakan uang pas untuk mengonfirmasi pembayaran reservasi (tidak boleh kurang / DP).</p>
        <p style="font-weight: 200">- Syarat dan ketentuan bisa berubah-ubah sewaktu-waktu tanpa pemberitahuan terlebih dahulu</p>
        <?php else : ?>
        <p style="font-weight: 200">- Simpan tanda bukti reservasi ini sebagai tanda bukti reservasi gedung yang sah.</p>
        <p style="font-weight: 200">- Jika pada tanggal yang telah ditentukan penyewa tidak menggunakan gedung maka dianggap membatalkan reservasi</p>
        <p style="font-weight: 200">- Uang reservasi tidak bisa dikembalikan apapun alasannya.</p>
        <p style="font-weight: 200">- pengelola berhak menghentikan acara apabila acara melanggar peraturan yang telah disepakati.</p>
        <p style="font-weight: 200">- Dengan membaca ini penyewa telah menyetujui syarat dan ketentuan yang berlaku</p>
       <?php endif ?>
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purpose -->
  <script src="<?= base_url() ?>assets/dist/js/demo.js"></script>

  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>

  <script src="<?= base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>

  <script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script type="text/javascript">
   $(document).ready(function(){

     window.print();

   })

   window.onafterprint = function(){window.history.back()}
 </script>
</body>
</html>
