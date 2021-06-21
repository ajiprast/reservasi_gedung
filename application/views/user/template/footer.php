<footer>

 <!-- Footer Start-->
 <div class="footer-main">
  <div class="footer-area footer-padding">
    <div class="container">
     <!-- Copy-Right -->
     <div class="row align-items-center">
      <div class="col-xl-12 ">
        <div class="footer-copy-right">
         <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | ha Djunaid Convention Centre <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Mega</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Footer End-->

</footer>

<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="<?php echo base_url('assets/') ?>assets/js/vendor/modernizr-3.5.0.min.js"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="<?php echo base_url('assets/') ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?php echo base_url('assets/') ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url('assets/') ?>assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="<?php echo base_url('assets/') ?>assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="<?php echo base_url('assets/') ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url('assets/') ?>assets/js/slick.min.js"></script>
<!-- Date Picker -->
<script src="<?php echo base_url('assets/') ?>assets/js/gijgo.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="<?php echo base_url('assets/') ?>assets/js/wow.min.js"></script>
<script src="<?php echo base_url('assets/') ?>assets/js/animated.headline.js"></script>
<script src="<?php echo base_url('assets/') ?>assets/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="<?php echo base_url('assets/') ?>assets/js/jquery.scrollUp.min.js"></script>
<script src="<?php echo base_url('assets/') ?>assets/js/jquery.nice-select.min.js"></script>
<script src="<?php echo base_url('assets/') ?>assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="<?php echo base_url('assets/') ?>assets/js/contact.js"></script>
<script src="<?php echo base_url('assets/') ?>assets/js/jquery.form.js"></script>
<script src="<?php echo base_url('assets/') ?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url('assets/') ?>assets/js/mail-script.js"></script>
<script src="<?php echo base_url('assets/') ?>assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->    
<script src="<?php echo base_url('assets/') ?>assets/js/plugins.js"></script>
<script src="<?php echo base_url('assets/') ?>assets/js/main.js"></script>


<!-- Page specific script -->


<script type="text/javascript">
  $('#tgl_akhir').change(function(){
    const oneDay = 24*60*60*1000;
    const kk = $(this).val();
    const tgl_akhir = new Date($(this).val());

    const k = $("#tgl_mulai").val();

    const id_gedung = $("#gedung").val();

    if( k == ""){
      var tgl_awal = new Date(kk);
    }else{
      var tgl_awal =  new Date($('#tgl_mulai').val());
    }

    const tgl = Math.round(Math.round((tgl_akhir.getTime() - tgl_awal.getTime()) / (oneDay)));
    const lama_reservasi =tgl + 1;
    $('#lama_reservasi').val(lama_reservasi +' hari');
    $('#lama_reservasi1').val(lama_reservasi);
    $.ajax({

      url:"<?= base_url(); ?>user/bayar",
      method:"POST",
      dataType : 'json',
      data:{lama_reservasi : lama_reservasi,id_gedung : id_gedung},
      success:function(data){
        $('#bayar').val(data.bayar);
        $('#total_bayar').val('Rp '+data.totBayar);
        $('#bayarTampil').val('Rp '+data.bayarTampil);
        if(data.diskon == null){
          $('#diskon').val('tidak ada diskon');
        }else{
         $('#diskon').val(data.diskon+'%');
       }
       $('#id_diskon').val(data.id_diskon);
     }
   });
  })

  $('#tgl_mulai').change(function(){
   const oneDay = 24*60*60*1000;
   var jj = $(this).val();
   const tgl_awal = new Date($(this).val());

    const id_gedung = $("#gedung").val();


   if($('#tgl_akhir').val() == ''){
    var tgl_akhir = new Date(jj);
  }else{
    var tgl_akhir = new Date($('#tgl_akhir').val());
  }

  const tgl = Math.round(Math.round((tgl_akhir.getTime() - tgl_awal.getTime()) / (oneDay)));
  const lama_reservasi =tgl + 1;
  $('#lama_reservasi').val(lama_reservasi +' hari');
  $('#lama_reservasi1').val(lama_reservasi);
  $.ajax({

    url:"<?= base_url(); ?>user/bayar",
    method:"POST",
    dataType : 'json',
    data:{lama_reservasi : lama_reservasi,id_gedung : id_gedung},
    success:function(data){
      $('#bayar').val(data.bayar);
      $('#total_bayar').val('Rp '+data.totBayar);
      if(data.diskon == null){
        $('#diskon').val('tidak ada diskon');
      }else{
       $('#diskon').val(data.diskon+'%');
     }
     $('#id_diskon').val(data.id_diskon);
     $('#bayarTampil').val('Rp '+data.bayarTampil);
   }
 });
});

  $('#gedung').change(function(){

    var id_gedung = $(this).val();
    var tgl_awal = new Date($('#tgl_mulai').val());
    var tgl_akhir = new Date($('#tgl_akhir').val());

    var oneDay = 24*60*60*1000;
    if($('#tgl_mulai').val() == '' || $('#tgl_akhir').val() == ''){
      var tgl = 0;
    }else{
    var tgl = Math.round(Math.round((tgl_akhir.getTime() - tgl_awal.getTime()) / (oneDay)));
    }

    var lama_reservasi =tgl + 1;

    $('#lama_reservasi').val(lama_reservasi +' hari');
    $('#lama_reservasi1').val(lama_reservasi);

    $.ajax({

    url:"<?= base_url(); ?>user/bayar",
    method:"POST",
    dataType : 'json',
    data:{lama_reservasi : lama_reservasi,id_gedung : id_gedung},
    success:function(data){
      $('#bayar').val(data.bayar);
      $('#total_bayar').val('Rp '+data.totBayar);
      if(data.diskon == null){
        $('#diskon').val('tidak ada diskon');
      }else{
       $('#diskon').val(data.diskon+'%');
     }
     $('#id_diskon').val(data.id_diskon);
     $('#bayarTampil').val('Rp '+data.bayarTampil);
   }
 });


  });


   $(document).on('click', '#cari', function () {
    var nomor = $("#nomor").val();
    var nik = $("#nik").val();
    if(nomor == '' || nik == ''){
       alert('Isi nomor penyewa dan nik terlebih dahulu')
    }else{
    var url = "<?php echo base_url('user/buktiSewa/:nomor/:nik') ?>"
    url = url.replace(':nomor', nomor)
    url = url.replace(':nik', nik)
    $('#cari').attr('href', url)
    }
   
  })


  
</script>

</body>
</html>