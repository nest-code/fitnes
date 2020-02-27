<?php
// include_once 'page/beranda.php';

  $halaman = @$_GET['halaman'];
  $aksi = @$_GET['aksi'];

if ($halaman =="beranda") {
        if ($aksi == "") {
          include_once 'page/beranda.php';
        }elseif ($aksi == "select_pengumuman") {
          include 'data/select_sampah.php';
        }

}elseif ($halaman =="daftar"){
      if ($aksi== "") {
        include 'page/daftar.php';
      }elseif ($aksi == "select_pengumuman") {
        include 'data/select_sampah.php';
      }

}elseif ($halaman =="member"){
      if ($aksi== "") {
        include 'page/member.php';
      }elseif ($aksi == "select_pengumuman") {
        include 'data/select_paket.php';
      }


}elseif ($halaman =="kontak"){
  if ($aksi== "") {
    include 'page/kontak.php';
  }elseif ($aksi == "select_") {
    include 'data/jenis_select.php';
  }

}elseif ($halaman ==""){
    if ($aksi== "") {
      include 'page/beranda.php';
    }
   


}

?>
