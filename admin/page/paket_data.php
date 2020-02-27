<?php
include "backend/koneksi.php";

$no=1;
$sql = mysqli_query ($koneksi, "SELECT tb_paket.nama, tb_paket.harga, tb_paket.waktu, tb_jenis.nama as nama_jenis from tb_paket inner join tb_jenis on tb_paket.id_jenis=tb_jenis.id_jenis");
while ($result = $sql->fetch_assoc()) {
?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $result['nama']; ?></td>
        <td><?php echo $result['nama_jenis']; ?></td>
        <td>Rp. <?php echo $result['harga']; ?></td>
        <td><?php echo $result['waktu']; ?> /Hari</td>
        <td style="text-align:center">
            <a href="?halaman=paket&aksi=edit&id=<?php echo $result ['id_paket']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fa fa-edit fa-sm text-white-50"></i> Edit</a>    
            <a href="?halaman=paket&aksi=hapus&id=<?php echo $result ['id_paket']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fa fa-trash fa-sm text-white-50"></i> Hapus</a>    
        </td>

      </tr>
    <?php }
    ?>
