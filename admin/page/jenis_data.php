<?php
include "backend/koneksi.php";

$no=1;
$sql = mysqli_query ($koneksi, "select * from tb_jenis");
while ($result = $sql->fetch_assoc()) {
?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $result['nama']; ?></td>
        <td style="text-align:center;">
            <a href="?halaman=jenis&aksi=ubah&id=<?php echo $result ['id_jenis']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fa fa-edit fa-sm text-white-50"></i> Edit</a>    
            <a href="?halaman=jenis&aksi=hapus&id=<?php echo $result ['id_jenis']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fa fa-trash fa-sm text-white-50"></i> Hapus</a>    
        </td>

      </tr>
    <?php }
    ?>
