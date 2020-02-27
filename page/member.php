<?php
include 'admin/backend/user_member_insert.php';
?>



<div style="background-color:#bababa ;  padding-top: 7.0em;  ">
    <div class="overlay"></div>
        <div class="container">
			<div >
			<div class="row justify-content-center pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center fadeInUp ftco-animated">
            <h2 class="mb-1">Membership Plans</h2>
          </div>
</div>
				<div class="appointment-form" >
                <div class="row">
				<div  class="col-md-6 appointment pl-md-8 py-md-2 ftco-animate fadeInUp ftco-animated">
	    			<form action="" class="appointment-form" method="post" >
	    				<div class="form-group">
	    					<div class="d-flex">
	    						<div class="mr-2">
	    							<label for="height">Nama Akun</label>
			    					<input type="text" class="form-control" name="nama_akun" placeholder="Nama Akun.." required>
			    				</div>
		    					<div class="ml-2">
	    							<label for="height">Kata Sandi</label>
			    					<input type="text" class="form-control" name="kata_sandi" placeholder="Kata Sandi.." required>
			    				</div>
	    					</div>
                        </div>

                        <div class="form-group">
	    					<div class="d-flex">
	    						<div class="mr-6">
	    							<label for="height">email</label>
			    					<input type="text" class="form-control" name="email" placeholder="Email.." required>
			    				</div>
	    					</div>
                        </div>

                        <div class="form-group">
	    					<div class="d-flex">
	    						<div class="mr-2">
	    							<label for="height">Nama</label>
			    					<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap.." required>
			    				</div>
		    					<div class="ml-2">
	    							<label for="height">Jenis Kelamin</label>
			    				<select name="jk" class="form-control">
                                    <option value="">-Pilih-</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
			    				</div>
	    					</div>
                        </div>

                        <div class="form-group">
	    					<div class="d-flex">
		    					<div class="mr-2">
	    							<label for="height">Tanggal Lahir</label>
			    					<input type="date" class="form-control" name="tgl_lahir" required>
                                </div>
                                <div class="ml-2">
	    							<label for="height">Hp</label>
			    					<input type="number" class="form-control" name="no_hp" placeholder="No. Hp.." required>
			    				</div>
	    					</div>
                        </div>

                        <div class="form-group">
	    					<div class="d-flex">
		    					<div class="mr-6">
	    							<label for="height">Alamat</label>
			    					<input type="text" class="form-control" name="alamat" placeholder="Alamat" >
                                </div>
	    					</div>
						</div>
						
					


				
				</div>
				
	    		<div  class="col-md-6 appointment pl-md-6 py-md-2 ftco-animate fadeInUp ftco-animated">	
			
	    				<div class="form-group">
	    					<div class="d-flex">
	    						<div class="mr-2">
	    							<label for="height">Pilih Paket Member</label>
									<select name="paket" class="form-control" >
										<option value="">-Pilih-</option>
										<?php
											include "admin/backend/koneksi.php";
											$sql = mysqli_query ($koneksi, "select * from tb_paket");
											while ($result = $sql->fetch_assoc()) {
											?>
											<option value="<?php echo $result['id_jenis']; ?>"><?php echo $result['nama']; ?></option>                   
												<?php }
										?>
									</select>
			    				</div>
	    					</div>
                        </div>


	    				<div class="d-md-flex">
		            <div class="form-group d-flex">
		            	<input type="submit" value="Batal" class="btn btn-secondary py-3 px-4 mr-2">
		              <input type="submit" value="kirim" name="kirim" class="btn btn-primary py-3 px-4 ml-2">
		            </div>
	    				</div>
	    			</form>
    			</div>
				</div>
				
				</div>

                </div>
            </div>       
        </div>
    </div>
</div>