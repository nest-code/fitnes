<?php
include 'backend/koneksi.php';
  $id = @$_GET['id'];
  
  $sql = mysqli_query ($koneksi, "delete from tb_member where id_member='$id'");

  if ($sql){
    ?>
    <script src="../assets/js/sweetalert.min.js"></script>
    <script type="text/javascript">
    swal({
      title: "Hapus",
      text: "Data telah dihapus",
      icon: "success",
      confirmButtonText: "Ok",
      closeOnConfirm: false
    },
    function(){
      window.location="?halaman=homestay";
    });
    </script>
  <?php
      }
?>
