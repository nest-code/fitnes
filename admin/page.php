<?php
  $halaman = @$_GET['halaman'];
  $aksi = @$_GET['aksi'];

if ($halaman =="beranda") {
        if ($aksi == "") {
          include'page/beranda.php';
        }elseif ($aksi == "select_pengumuman") {
          include 'data/select_sampah.php';
        }elseif ($aksi == "tambah_sampah"){
          include 'hal_tambah_sampah.php';
        }elseif ($aksi == "hapus_sampah"){
          include 'data/hapus_sampah.php';
        }elseif ($aksi == "edit_sampah"){
          include 'data/edit_sampah.php';
        }
      
}elseif ($halaman =="member"){
      if ($aksi== "") {
        include 'page/member.php';
      }elseif ($aksi == "ubah") {
        include 'page/member_ubah.php';
      }elseif ($aksi == "tambah"){
        include 'page/member_tambah.php';
      }elseif ($aksi == "hapus"){
        include 'backend/member_delete.php';
      }elseif ($aksi == "edit"){
        include 'data/edit_sampah.php';
      }

}elseif ($halaman =="paket"){
      if ($aksi== "") {
        include 'page/paket.php';
      }elseif ($aksi == "select_pengumuman") {
        include 'data/select_paket.php';
      }elseif ($aksi == "tambah"){
        include 'page/paket_tambah.php';
      }elseif ($aksi == "hapus"){
        include 'backend/paket_delete.php';
      }elseif ($aksi == "edit"){
        include 'data/paket_edit.php';
      }


}elseif ($halaman =="jenis"){
  if ($aksi== "") {
    include 'page/jenis.php';
  }elseif ($aksi == "ubah") {
    include 'page/jenis_ubah.php';
  }elseif ($aksi == "tambah"){
    include 'page/jenis_tambah.php';
  }elseif ($aksi == "hapus"){
    include 'backend/jenis_delete.php';
  }elseif ($aksi == "edit"){
    include 'data/jenis_edit.php';
  }


}elseif ($halaman =="pengguna"){
  if ($aksi== "") {
    include 'page/pengguna.php';
  }elseif ($aksi == "select_") {
    include 'data/pengguna_select.php';
  }elseif ($aksi == "tambah"){
    include 'page/pengguna_tambah.php';
  }elseif ($aksi == "hapus"){
    include 'backend/pengguna_delete.php';
  }elseif ($aksi == "edit"){
    include 'data/pengguna_edit.php';
  }

  
}elseif ($halaman =="profil"){
  if ($aksi== "") {
    include 'page/profil.php';
  }

}elseif ($halaman =="trainer"){
  if ($aksi== "") {
    include 'page/trainer.php';
  }

}elseif ($halaman =="logout"){
  if ($aksi== "") {
    include 'backend/logout.php';
  }



}elseif ($halaman =="login"){
  if ($aksi== "") {
    include 'page/login.php';
  }
}


elseif ($halaman =="perusahaan"){
  if ($aksi== "") {
    include 'page/perusahaan.php';
  }elseif ($aksi == "ubah") {
    include 'page/perusahaan_ubah.php';
  }
}

elseif ($halaman =="pembayaran"){
  if ($aksi== "") {
    include 'page/pembayaran.php';
  }elseif ($aksi == "langsung") {
    include 'page/pembayaran_langsung.php';
  }elseif ($aksi == "konfirmasi") {
    include 'page/pembayaran_konfirmasi.php';
  }
}


elseif ($halaman =="laporan"){
  if ($aksi== "") {
    include 'page/laporan.php';
  }elseif ($aksi == "ubah") {
    include 'page/perusahaan_ubah.php';
  }
}

elseif ($halaman ==""){
  if ($aksi== "") {
    include 'page/beranda.php';
  }
}




?>