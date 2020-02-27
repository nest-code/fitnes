<?php
include_once "koneksi.php";



// echo $result['id_member'];


if(isset($_POST['kirim'])) {

$nama_akun=$_POST['nama_akun'];
$kata_sandi=$_POST['kata_sandi'];
$nama=$_POST['nama'];
$jk=$_POST['jk'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$no_hp=$_POST['no_hp'];
date_default_timezone_set('Asia/Jakarta');
$dibuat=date('Y-m-d H:i:s');
$diubah='';

$paket=$_POST['paket'];
$akses='ONL';
$status='Belum';
$pengguna='';






$sql = "insert into tb_member (id_member,nama_akun, kata_sandi, nama, jk, tgl_lahir, alamat, email,no_hp, dibuat, diubah) values('','$nama_akun','$kata_sandi','$nama','$jk','$tgl_lahir','$alamat','$email','$no_hp','$dibuat','$diubah')";mysqli_query($koneksi,$sql);

$sql2 = mysqli_query ($koneksi, "SELECT id_member FROM tb_member order by id_member DESC limit 1");
$result = $sql2->fetch_assoc();

$member=$result['id_member'];


$sql3 = "insert into tb_transaksi (id_transaksi,id_member, id_paket, id_pengguna, akses, status, dibuat, diubah) values('','$member','$paket','$pengguna','$akses','$status','$dibuat','$diubah')";mysqli_query($koneksi,$sql3);


}
?>

