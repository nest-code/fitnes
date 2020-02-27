<?php 

if(isset($_POST['kirim'])) {
$nama_akun=$_POST['nama_akun'];
$kata_sandi=$_POST['kata_sandi'];
$nama=$_POST['nama'];
$jk=$_POST['jk'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$no_hp=$_POST['no_hp'];


$sql = "insert into tb_member (id_member,nama_akun, kata_sandi, nama, jk, tgl_lahir, alamat, email,no_hp) values('','$nama_akun','$kata_sandi','$nama','$jk','$tgl_lahir','$alamat','$email','$no_hp')";mysqli_query($koneksi,$sql);

}?>