<?php
include "admin/backend/koneksi.php";

$sql = mysqli_query ($koneksi, "select * from tb_paket");
while ($data = $sql->fetch_assoc()) {
?>

            <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <h2 class="heading"><?php echo $data['nama']; ?></h2>
	            <span class="price"><sup>Rp.</sup> <span class="number"><?php echo $data['harga']; ?>Ribu</span></span>
	            <span class="excerpt d-block"></span>
	            <a href="?halaman=member" class="btn btn-primary d-block px-3 py-4 mb-4">Daftar Sekarang</a>
	            <h3 class="heading-2 mb-4">Nikmati Fasilitas</h3>
	            <ul class="pricing-text">
				<li></li>
				<?php echo $data['fasilitas']; ?>
	            </ul>
	            </div>
	          </div>
            </div>

            <?php }
    ?>

