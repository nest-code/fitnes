<?php
include_once 'backend/perusahaan_select.php';
include 'backend/perusahaan_update.php';
?>

<div class="page-title">
              <div class="title_left">
                <h3>Data perusahaan</h3>
                <div class="input-group">
                   <a href="?halaman=perusahaan&aksi=ubah"> <button class="btn btn-primary" ><i class="fa fa-add"></i>Ubah</button> </a>
                </div>
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

<div class="col-md-12 col-sm-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Data Profil Perusahaan</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                   
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <form class="" action="" method="post" enctype="multipart/form-data" >
                   
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Perusahaan<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="nama" value="<?php echo $result['nama']; ?>" readonly>
                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Slogan<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="nama" value="<?php echo $result['slogan']; ?>" readonly>
                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat</label>
                      <div class="col-md-6 col-sm-6">
                        <textarea class="form-control" readonly><?php echo $result['alamat']; ?></textarea>
                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">email<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="email" value="<?php echo $result['email']; ?>" readonly></div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor Hp <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="number"  value="<?php echo $result['no_hp']; ?>" readonly></div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Detail <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="text"  value="<?php echo $result['detail']; ?>" readonly></div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Logo <span class="required">*</span></label>
                      <div class="col-md-2 col-sm-2 justify">        
                         <img class="align:center" src="upload/profil/<?php echo $result['logo']; ?>" alt="" width="100px">
                      </div>

                      </div>


                    <div class="ln_solid">
                    </div>
                  </form>
                </div>
              </div>
            </div>