<?php
include_once "backend/koneksi.php";

if(isset($_POST['ubah'])) {

$id_jenis=$_POST['id_jenis'];
$nama=$_POST['nama'];

$sql = $koneksi->query("update tb_jenis set nama='$nama' where id_jenis='$id_jenis'");

if ($sql){
    ?>
  	<script type="text/javascript">
				alert("Berhasi! Data berhasil disimpan");
				window.location=".?halaman=jenis";
    </script>
    <?php
      }
  }
  



?>
