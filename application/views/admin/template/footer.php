</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.0.4
  </div>
  <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
  reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
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
 $(function () {
  $("#example1").DataTable({
    "responsive": true,
    "autoWidth": false,
  });

  $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });

});


  <?php if($this->session->userdata['role_id'] == 1 && $kk == 'index') : ?>
   // var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

   <?php 

   $bulan = '';
   $pendapatan =null;

   foreach ($grafik_pendapatan as $key => $pd) {
     # code...

    $pdpt = $pd->bayar;
    if($pd->bulan == 1){
      $bln = 'januari';
    }else if($pd->bulan == 2){
      $bln = 'februari';
    }else if($pd->bulan == 3){
      $bln = 'maret';
    }else if($pd->bulan == 4){
      $bln = 'april';
    }else if($pd->bulan ==5){
      $bln = 'mei';
    }else if($pd->bulan == 6){
      $bln = 'juni';
    }else if($pd->bulan == 7){
      $bln = 'juli';
    }else if($pd->bulan == 8){
      $bln = 'agustus';
    }else if($pd->bulan == 9){
      $bln = 'september';
    }else if($pd->bulan ==10){
      $bln = 'oktober';
    }else if($pd->bulan == 11){
      $bln = 'november';
    }else{
      $bln = 'desember';
    }
    
    $pendapatan .= "'$pdpt'".",";
    $bulan .= "'$bln'".",";
   }


   $pengguna =null;

   foreach ($grafik_pengguna as $key => $pg) {
     # code...

    $pg = $pg->pengguna;
    
    $pengguna .= "'$pg'".",";
   }


    ?>

    var areaChartData = {
      labels  : [<?php echo $bulan ?>],
      datasets: [
        {
          label               : 'PENDAPATAN',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo $pendapatan ?>]
        },
        {
          label               : '',
          backgroundColor     : 'rgba(250, 250, 250, 250)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [<?php echo $pengguna ?>]
        },
      ]
    }

    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp0
    barChartData.datasets[1] = temp1

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

  <?php endif ?>


  $(document).on('click', '#edit_diskon', function () {
    var id = $(this).data('id')
    var nama_diskon = $(this).data('nama')
    var hari = $(this).data('lama')
    var diskon = $(this).data('diskon')
    var keterangan = $(this).data('keterangan')
    var url = "<?= base_url('admin/editDiskon/:id') ?>"
    url = url.replace(':id', id)
    $('form').attr('action', url)
    $('#nama_diskon').val(nama_diskon)
    $('#keterangan').val(keterangan)
    $('#lama_diskon').val(hari)
    $('#diskon').val(diskon)

  });

  $(document).on('click', '#ubah_admin', function () {
    var id = $(this).data('id')
    var nama_admin = $(this).data('nama')
    var url = "<?= base_url('admin/editAdmin/:id') ?>"
    url = url.replace(':id', id)
    $('form').attr('action', url)
    $('#nama_admin').val(nama_admin)
  });

  $(document).on('click', '#ubah_admin', function () {
    var id = $(this).data('id')
    var nama_admin = $(this).data('nama')
    var url = "<?= base_url('admin/editAdmin/:id') ?>"
    url = url.replace(':id', id)
    $('form').attr('action', url)
    $('#nama_admin').val(nama_admin)
  });

   $(document).on('click', '#editHarga', function () {
    var id = $(this).data('id')
    var nama_gedung = $(this).data('nama')
    var harga_reservasi = $(this).data('harga')
    var fasilitas = $(this).data('fasilitas')
    var url = "<?= base_url('admin/editHarga/:id') ?>"
    url = url.replace(':id', id)
    $('form').attr('action', url)
    $('#nama_gedung').val(nama_gedung)
    $('#harga').val(harga_reservasi)
    $('#fasilitas').val(fasilitas)
  });

   $("#cariPenyewa").click(function(){

    var nik = $("#nik").val();
    var nomor = $("#nomor").val();

    $.ajax({

      url:"<?= base_url(); ?>pengelola/cariPenyewa",
      method:"POST",
      data:{nomor : nomor,nik : nik},
      success:function(data){
        $('#tampil').html(data);
     }
   });

   })



</script>
</body>
</html>
