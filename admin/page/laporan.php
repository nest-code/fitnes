<div class="col-md-3 col-sm-3  ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Member Aktif</h2>
      <div class="clearfix"></div>
    </div>

    <div class="x_content">
      <iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;">
      </iframe>
      <canvas id="myChart"  ></canvas>
    </div>
  </div>
</div>

<div class="col-md-3 col-sm-3  ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Jenis Kelamin</h2>
      <div class="clearfix"></div>
    </div>

    <div class="x_content">
      <iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;">
      </iframe>
      <canvas id="myChart"  ></canvas>
    </div>
  </div>
</div>

<div class="col-md-3 col-sm-3  ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Trainer</h2>
      <div class="clearfix"></div>
    </div>

    <div class="x_content">
      <iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;">
      </iframe>
      <canvas id="myChart"  ></canvas>
    </div>
  </div>
</div>

<div class="col-md-3 col-sm-3  ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Buat Laporan</h2>
      <div class="clearfix"></div>
    </div>

    <div class="x_content">
      <iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;">
      </iframe>
      <canvas id="myChart"  ></canvas>
    </div>
  </div>
</div>







  <script>
  var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'pie',
		data: {
			labels: ["Laki-laki", "Perempuan"],
			datasets: [{
				label: '',
				data: [
        <?php 
        	$koneksi = mysqli_connect("localhost","root","","db_fitness");
				$jumlah_laki = mysqli_query($koneksi,"select * from tb_pengguna where jk='L'");
				echo mysqli_num_rows($jumlah_laki);
				?>, 
        <?php 
        	$koneksi = mysqli_connect("localhost","root","","db_fitness");
				$jumlah_perempuan = mysqli_query($koneksi,"select * from tb_pengguna where jk='P'");
				echo mysqli_num_rows($jumlah_perempuan);
				?>
				],
				backgroundColor: [
				'rgba(255, 99, 132, 0.2)',
				'rgba(54, 162, 235, 0.2)'
				],
				borderColor: [
				'rgba(255,99,132,1)',
				'rgba(54, 162, 235, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
</script>


