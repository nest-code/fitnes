<?php
include "backend/koneksi.php";

$no=1;
$sql = mysqli_query ($koneksi, "select * from tb_member");
while ($result = $sql->fetch_assoc()) {
?>

<?php
$tgl_lahir = date_format(date_create($result['tgl_lahir']), 'Y');
$sekarang = date('Y');
$usia = $sekarang - $tgl_lahir;
?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $result['nama']; ?></td>
        <td>
            <?php if($result['jk'] == 'L'){ echo 'Laki-laki'; } ?>
            <?php if($result['jk'] == 'P'){ echo 'Perempuan'; } ?>
        </td>

        <td><?php echo  $usia?> Tahun</td>
        <td ><?php echo $result['no_hp']; ?></td>
        <td><?php echo $result['alamat']; ?></td>
        <td></td>

        <td style="text-align:center">
             <a href="?halaman=member&aksi=ubah&id=<?php echo $result ['id_member']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fa fa-eye fa-sm text-white-50"></i> Lihat</a>    
            <a href="?halaman=member&aksi=ubah&id=<?php echo $result ['id_member']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fa fa-edit fa-sm text-white-50"></i> Edit</a>    
            <a href="?halaman=member&aksi=hapus&id=<?php echo $result ['id_member']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fa fa-trash fa-sm text-white-50"></i> Hapus</a>    
        </td>

      </tr>
    <?php }
    ?>
