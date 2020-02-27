
<?php
include "backend/koneksi.php";
$sql = mysqli_query ($koneksi, "SELECT * from tb_pengguna where nama_akun='$user_username'");
$result = $sql->fetch_assoc();              
?>


<div class="page-title">
              <div class="title_left">
                <h3>Profil</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Profil</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3  profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <img class="img-responsive avatar-view" src="backend/foto/<?php echo $result['foto'];?> " alt="<?php  echo $x=$result['foto'];   ?> " title="Change the avatar">
                        </div>
                      </div>
                    </div>



                    <div class="col-md-9 col-sm-4">
                    <h3><?php echo $result['nama'];?></h3>
                    <ul class="list-unstyled user_data">
                    <li>
                        <i class="fa fa-cog user-profile-icon"></i>  <?php echo $result['level']; ?>
                    </li>
                    <li>
                        <i class="fa fa-child user-profile-icon"></i>  
                        <?php if($result['jk'] == 'L'){ echo 'Laki-laki'; } ?>
                        <?php if($result['jk'] == 'P'){ echo 'Perempuan'; } ?>
                    </li>
                    <li>
                        <i class="fa fa-birthday-cake user-profile-icon"></i> <?php echo $result['tgl_lahir']; ?>
                    </li>

                    <li>
                        <i class="fa fa-mobile user-profile-icon"></i> <?php echo $result['no_hp']; ?>
                    </li>
                    <li class="m-top-xs">
                        <i class="fa fa-external-link user-profile-icon"></i>  <?php echo $result['email']; ?>
                    </li>
                    </ul>
                    <a href="?halaman=jenis&aksi=edit&id=<?php echo $result ['id_jenis']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">Ubah Profil</a>    


                </div>
                    </div>
            
                   
                    </div>
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
