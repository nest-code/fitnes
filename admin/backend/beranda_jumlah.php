<?php

include_once "backend/koneksi.php";

$sql = mysqli_query ($koneksi, "SELECT Count(*) as jumlah From tb_paket");
$result = $sql->fetch_assoc();
$jumlah_paket=$result['jumlah'];

$sql2 = mysqli_query ($koneksi, "SELECT Count(*) as jumlah From tb_member");
$result2 = $sql2->fetch_assoc();
$jumlah_member=$result2['jumlah'];

$sql3 = mysqli_query ($koneksi, "SELECT Count(*) as jumlah From tb_transaksi where status='Proses'");
$result3 = $sql3->fetch_assoc();
$jumlah_transaksi=$result3['jumlah'];

$sql4 = mysqli_query ($koneksi, "SELECT Count(*) as jumlah From tb_pengguna where level='Pelatih' ");
$result4 = $sql4->fetch_assoc();
$jumlah_trainer=$result4['jumlah'];

?>
