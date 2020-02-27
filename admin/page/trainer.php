

<div class="row">
                <div class="x_panel">
                  <div class="x_content">
                      <div class="col-md-12 col-sm-12  text-center">
                        <ul class="pagination pagination-split">
                            <h2> Data Trainer</h2>
                        </ul>
                      </div>

                      <div class="clearfix"></div>


                      <?php
                      include "backend/koneksi.php";

                      $no=1;
                      $sql = mysqli_query ($koneksi, "SELECT * FROM tb_pengguna WHERE level='Pelatih'");
                      while ($result = $sql->fetch_assoc()) {
                      ?>
                        
                           
                      <div class="col-md-4 col-sm-4  profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i><?php echo $result['level']; ?></i></h4>
                            <div class="left col-md-7 col-sm-7">
                              <h2><?php echo $result['nama']; ?></h2>
                            
                              <ul class="list-unstyled">
                                 <li><i class="fa fa-gender"></i> Jenis Kelamin: <?php echo $result['jk']; ?> </li>
                                <li><i class="fa fa-building"></i> Alamat: <?php echo $result['alamat']; ?> </li>
                                <li><i class="fa fa-phone"></i> HP : <?php echo $result['no_hp']; ?> </li>
                              </ul>
                            </div>
                            <div class="right col-md-5 col-sm-5 text-center">
                              <img src="assets/production/images/img.jpg" alt="" class="img-circle img-fluid">
                            </div>
                          </div>
                          <div class=" profile-bottom text-center">
                            <div class=" col-sm-6 emphasis">
                              <p class="ratings">
                                <a>4.0</a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star-o"></span></a>
                              </p>
                            </div>
                            <div class=" col-sm-6 emphasis">
                              <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-user">
                                </i> <i class="fa fa-comments-o"></i> </button>
                              <button type="button" class="btn btn-primary btn-sm">
                                <i class="fa fa-user"> </i> Lihat Profil
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php }
                      ?>

                  </div>
                </div>
            </div>