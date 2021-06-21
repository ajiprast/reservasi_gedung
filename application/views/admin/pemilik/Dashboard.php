<section class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-header">
            <h5 class="card-title">Data Rekap Perbulan</h5>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                  <a href="#" class="dropdown-item">Action</a>
                  <a href="#" class="dropdown-item">Another action</a>
                  <a href="#" class="dropdown-item">Something else here</a>
                  <a class="dropdown-divider"></a>
                  <a href="#" class="dropdown-item">Separated link</a>
                </div>
              </div>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <p class="text-center">
                  <strong> Jumlah Penyewa Selama <?=date('Y') ?></strong>
                </p>

                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.chart-responsive -->
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- ./card-body -->
          <div class="card-footer">
            <div class="row">

              <?php
              $iconPengguna = '';
              $textPengguna = '';

              $iconPendapatan = '';
              $textPendapatan = '';

              $a = $pendapatan_sekarang['bayar1'];
              $b = $pendapatan_kemarin['bayar2'];

              $c = $pengguna_sekarang['jumlah_penyewa'];
              $d = $pengguna_kemarin['jumlah_penyewa'];

              if($a == null or $a == 0 or $a == ''){
                $a = 1;
              }else{
                $a = $a;
              }

              if($b == null or $b == 0 or $b == ''){
                $pembagiPd = $a;
                $b = 1;
              }else{
                $pembagiPd = $b;
                $b = $b;
              }

              if($c == null or $c == 0 or $c == ''){
                $c = 1;
              }else{
                $c = $c;
              }

              if($d == null or $d == 0 or $d == ''){
                $pembagiPg = $c;
                $d = 1;
              }else{
                $pembagiPg = $d;
                $d = $d;
              }

              $persenPengguna = $c - $d;
              $perPengguna = ($persenPengguna * 100) / $pembagiPg;

              $persenPendapatan = $a - $b;
              $perPendapatan = ($persenPendapatan * 100) / $pembagiPd;

              if($pendapatan_sekarang['bayar1'] > $pendapatan_kemarin['bayar2']){
                $textPendapatan = 'text-success';
                $iconPendapatan = 'fa-caret-up';
              }else if($pendapatan_sekarang['bayar1']  ==  $pendapatan_kemarin['bayar2']){
                $textPendapatan = 'text-warning';
                $iconPendapatan = 'fa-caret-right';
              }else{
                $textPendapatan = 'text-danger';
                $iconPendapatan = 'fa-caret-down';
              }

              if( $pengguna_sekarang['jumlah_penyewa'] > $pengguna_kemarin['jumlah_penyewa']){
                $textPengguna = 'text-success';
                $iconPengguna = 'fa-caret-up';
              }else if($pengguna_sekarang['jumlah_penyewa'] == $pengguna_kemarin['jumlah_penyewa']){
                $iconPengguna = 'fa-caret-right';
                $textPengguna = 'text-warning';
              }else{
                $textPengguna = 'text-danger';
                $iconPengguna = 'fa-caret-down';
              } 
              ?>
              <div class="col-sm-6 col-6">
                <div class="description-block border-right">
                 <span class="description-percentage <?php echo $textPengguna ?>"><i class="fas <?php echo $iconPengguna ?>"></i> <?php echo $perPengguna ?>%</span>
                 <h5 class="description-header"><?php echo $pengguna_sekarang['jumlah_penyewa'] ?> pengguna</h5>
                 <span class="description-text">TOTAL PENGGUNA GEDUNG BULAN INI</span>
               </div>
               <!-- /.description-block -->
             </div>
             <!-- /.col -->
             <div class="col-sm-6 col-6">
              <div class="description-block border-right">
               <span class="description-percentage <?php echo $textPendapatan ?>"><i class="fas <?php echo $iconPendapatan ?>"></i> <?php echo floor($perPendapatan) ?>%</span>
               <h5 class="description-header">Rp <?= number_format($pendapatan_sekarang['bayar1'],0,'.','.') ?></h5>
               <span class="description-text">TOTAL PENDAPATAN BULAN INI </span>
             </div>
             <!-- /.description-block -->
           </div>
           <!-- /.col -->
         </div>
         <div class="row text-center mt-5">
          <div class="col-md-12">
           <h5 class="description-header">Jumlah Pengguna Layanan Bulan Ini</h5>
         </div>
         
         <?php foreach ($paket as $key => $pk) {
            # code...
           ?>
           <div class="col-sm-6 col-6">
            <div class="description-block border-right">
             <h5 class="description-header"> <?php echo $pk->jumlahPaket ?> Pengguna</h5>
             <span class="description-text"><?php echo $pk->nama_gedung ?></span>
           </div>
           <!-- /.description-block -->
         </div>
       <?php } ?>
     </div>
     <!-- /.row -->
   </div>
   <!-- /.card-footer -->
 </div>
 <!-- /.card -->
</div>
<!-- /.col -->
</div>
</div>
</section>