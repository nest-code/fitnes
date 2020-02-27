<?php
include_once "backend/koneksi.php";


if(isset($_POST['kirim'])) {

$nama=$_POST['nama'];
$id_jenis=$_POST['id_jenis'];
$fasilitas=$_POST['fasilitas'];
$harga=$_POST['harga'];
$waktu=$_POST['waktu'];

$sql = "insert into tb_paket (id_paket, nama,id_jenis, fasilitas, harga, waktu) values('','$nama','$id_jenis',$fasilitas, $harga','$waktu')";
mysqli_query($koneksi,$sql);
if ($sql){
    ?>
    <script src="../assets/js/sweetalert.min.js"></script>
    <script type="text/javascript">
    swal({
      title: "Sukses",
      text: "Data telah ditambahkan",
      icon: "success",
      confirmButtonText: "Ok",
      closeOnConfirm: false
    },
    function(){
      window.location="?halaman=member";
    });
    </script>
    <?php
      }
  }
?>
