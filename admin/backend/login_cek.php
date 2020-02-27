<?php
	//  include_once 'koneksi.php';
		$koneksi = mysqli_connect("localhost","root","","db_fitness");

		$akun_nama_akun = $_POST['nama_akun'];
		$akun_kata_sandi = $_POST['kata_sandi'];


 
		$hasil=null;
		$query="SELECT * FROM tb_pengguna WHERE nama_akun='$akun_nama_akun' and kata_sandi='$akun_kata_sandi'";
		
		$login = mysqli_query($koneksi, $query);
		$hasil=mysqli_num_rows($login);

		// var_dump($hasil);
		// die();

		if ($hasil > 0 ) {
			$data= mysqli_fetch_assoc($login);
      		$akun_nama=$data['nama'];
			$akun_nama_akun=$data['nama_akun'];
			$akun_kata_sandi=$data['kata_sandi'];
			$akun_level=$data['level'];
			$akun_foto=$data['foto'];


			//membuat session
			session_start();
			$_SESSION['nama']=$akun_nama;
			$_SESSION['nama_akun']=$akun_nama_akun;
			$_SESSION['kata_sandi']=$akun_kata_sandi;
			 $_SESSION['level']=$akun_level;
     		$_SESSION['foto']=$akun_foto;
			 
			 
			header('location:..?halaman=beranda');
		}else{
      	?>
				<script type="text/javascript">
				alert("Ada yang salah");
				window.location="../page/login.php";
				</script>
      	<?php
		}
?>
