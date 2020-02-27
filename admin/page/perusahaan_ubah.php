<?php
include_once 'backend/perusahaan_update.php';
include_once 'backend/perusahaan_select.php';
?>

<div class="page-title">
              <div class="title_left">
                <h3>Data perusahaan</h3>
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
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Settings 1</a>
                        <a class="dropdown-item" href="#">Settings 2</a>
                      </div>
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
                        <input class="form-control" type="hidden" name="id_profil" value="<?php echo $result['id_profil']; ?>"> 
                        <input class="form-control" name="nama" value="<?php echo $result['nama']; ?>">
                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Slogan<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="slogan" value="<?php echo $result['slogan']; ?>">
                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat</label>
                      <div class="col-md-6 col-sm-6">
                        <textarea class="form-control" name="alamat"><?php echo $result['alamat']; ?></textarea>
                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">email<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="email" name="email" value="<?php echo $result['email']; ?>"></div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor Hp <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="number" name="no_hp"  value="<?php echo $result['no_hp']; ?>"></div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Tentang <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                      <textarea name="tentang"  class="form-control"><?php echo $result['tentang']; ?></textarea>

                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Detail <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="text" name="detail"  value="<?php echo $result['detail']; ?>"></div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Logo <span class="required">*</span></label>
                      <div class="col-md-2 col-sm-2 justify">        
                         <img class="align:center" src="upload/profil/<?php echo $result['logo']; ?>" alt="" width="100px">
                        </div>
                      <div >
                      <input type="file" name="logo" value="" > <br>
                        <span>*Biarkan kosong jika tidak ingin diubah </span>
                      </div>
                      </div>


                    <div class="ln_solid">
                      <div class="form-group">
                        <div class="pull-right">
                            <button type="submit" name="kirim" value="kirim" class="btn btn-primary">Ubah</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </div>
                      </div>
                    </div>
                  </form>


                </div>
              </div>
            </div>