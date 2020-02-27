<?php
include "backend/koneksi.php";
$no=1;
// $sql = mysqli_query ($koneksi, "select * from tb_transaksi");
$sql = mysqli_query ($koneksi, "SELECT tb_transaksi.id_transaksi, tb_member.nama as member_nama, tb_paket.nama as paket_nama, tb_transaksi.status, tb_transaksi.dibuat FROM `tb_transaksi` inner join tb_member on tb_transaksi.id_member=tb_member.id_member inner join tb_paket on tb_transaksi.id_paket=tb_paket.id_paket inner join tb_pengguna on tb_pengguna.id_pengguna=tb_pengguna.id_pengguna group by tb_transaksi.id_transaksi");

while ($result = $sql->fetch_assoc()) {
?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $result['id_transaksi']; ?></td>
        <td><?php echo $result['member_nama']; ?></td>
        <td><?php echo $result['paket_nama']; ?></td>
        <td ><?php echo $result['dibuat']; ?></td>
        <td ><?php echo $result['status']; ?></td>
        <td>
            <a href="?halaman=pengguna&aksi=edit&id=<?php echo $result ['id_pengguna']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fa fa-edit fa-sm text-white-50"></i> Edit</a>    
            <a href="?halaman=pengguna&aksi=hapus&id=<?php echo $result ['id_pengguna']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fa fa-trash fa-sm text-white-50"></i> Hapus</a>    
        </td>

      </tr>
    <?php }
    ?>
