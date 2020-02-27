<?php
include_once "backend/koneksi.php";

if(isset($_POST['kirim'])) {

$nama=$_POST['nama'];
$sql = "insert into tb_jenis (id_jenis,nama) values('','$nama')"; mysqli_query($koneksi,$sql);


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
