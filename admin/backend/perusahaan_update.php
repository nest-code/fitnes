<?php
include_once "koneksi.php";

if(isset($_POST['kirim'])) {

$id_profil=$_POST['id_profil'];
$nama=$_POST['nama'];
$slogan=$_POST['slogan'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];
$email=$_POST['email'];
$tentang=$_POST['tentang'];
$detail=$_POST['detail'];

$sql = $koneksi->query("update tb_profil_perusahaan set nama='$nama', slogan='$slogan', alamat='$alamat', no_hp='$no_hp', email='$email', tentang='$tentang' , detail='$detail' where id_profil='$id_profil'");


}
?>
