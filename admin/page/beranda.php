<?php 
include_once "backend/beranda_jumlah.php";
?>


<div class="row">
<div class="animated flipInY col-lg-3   ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-group"></i></div>
                  <div class="count"><?php echo $jumlah_member; ?></div>
                  <h3><a href="?halaman=member">Member</a></h3>
                  
                  <p>Jumlah Data Member.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3  ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-asterisk"></i></div>
                  <div class="count"><?php echo $jumlah_paket; ?></div>
                  <h3><a href="?halaman=paket">Paket</a></h3>
                  <p>Data Paket Pilihan Member.</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3  ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-user"></i></div>
                  <div class="count"><?php echo $jumlah_trainer; ?></div>
                  <h3><a href="?halaman=trainer">Trainer</a></h3>
                  <p>Jumlah Data Trainer.</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3  ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <div class="count"><?php echo $jumlah_transaksi ?></div>
                  <h3><a href="?halaman=pembayaran">Pembayaran</a></h3>
                  <p>Konfirmasi Pembayaran.</p>
                </div>
              </div>


</div>