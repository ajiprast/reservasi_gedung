  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fullcalendar-bootstrap/main.min.css">

  <main>

    <!-- Best Pricing Start -->
    <section class="best-pricing best-pricing2 pricing-padding2">
      <div class="container">
        <!-- Section Tittle -->
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 col-md-8">
            <div class="section-tittle text-center">
              <h2>Lihat Jadwal Gedung Terpakai</h2>
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
         <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-body p-0">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-md-12 mb-4">
                <h4>Keterangan :</h4>
                </div>
                <div class="col-md-4">
                  <div style="height: 15px; width: 80px; border-radius: 30px;background-color: #0073b7"></div>
                  <p>Pengguna belum terkonfirmasi, tanggal masih bisa di reservasi</p>
                </div>
                 <div class="col-md-4">
                  <div style="height: 15px; width: 80px; border-radius: 30px;background-color: #f56954"></div>
                  <p>Pengguna dibatalkan, terkonfirmasi pengguna lain. kemungkinan tanggal masih bisa di reservasi</p>
                </div>
                 <div class="col-md-4">
                  <div style="height: 15px; width: 80px; border-radius: 30px;background-color: #00a65a"></div>
                  <p>Pengguna telah terkonfirmasi, tanggal tidak bisa di reservasi</p>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </div>
  <!-- Say Something Start -->
  <div class="say-something-aera pt-90 pb-90 fix">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="offset-xl-1 offset-lg-1 col-xl-5 col-lg-5">
          <div class="say-something-cap">
            <h2>Say Hello To The Collaboration Hub.</h2>
          </div>
        </div>
        <div class="col-xl-2 col-lg-3">
          <div class="say-btn">
            <a href="#" class="btn radius-btn">Contact Us</a>
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

<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/dist/js/demo.js"></script>

<script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/fullcalendar/main.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/fullcalendar-interaction/main.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/fullcalendar-bootstrap/main.min.js"></script>

<script type="text/javascript">

 $(function () {

  var date = new Date()
  var d    = date.getDate(),
  m    = date.getMonth(),
  y    = date.getFullYear()

  console.log(y)
  console.log(d)
  console.log(m)

  var Calendar = FullCalendar.Calendar;
  var calendarEl = document.getElementById('calendar');
  var calendar = new Calendar(calendarEl, {
    plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
    header    : {
      left  : 'prev',
      center: 'title',
      right : 'next'
    },
    'themeSystem': 'bootstrap',
      //Random default events
      events    : [

      <?php foreach ($tanggal as $tg) {
        if($tg->status == 1){
          $color = "#0073b7";
          $status = 'belum terkonfirmasi';
        }else if($tg->status == 3){
           $color = "#00a65a";
         $status = "terkonfirmasi";
       }else{
          $color = "#f56954";
         $status = "dibatalkan";
       }
      
       ?>
       {
        title          : '<?php echo $tg->nomor_reservasi ?> : <?php echo $status ?>',
        start          : new Date(<?php echo $tg->yearm ?>, <?php echo $tg->monthm ?> -1, <?php echo $tg->daym ?>),
        end            : new Date(<?php echo $tg->years ?>, <?php echo $tg->months ?> -1, <?php echo $tg->days +1 ?>),
          backgroundColor: '<?php echo $color ?>', //red
          borderColor    : '<?php echo $color ?>', //red
          allDay         : true
        },

      <?php } ?>
      ],
      
      editable  : false,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }    
    });

  calendar.render();
})
</script>