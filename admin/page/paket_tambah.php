<?php
include 'backend/paket_insert.php';
?>

<div class="page-title">
              <div class="title_left">
                <h3>Data Paket</h3>
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
                  <h2>Tambah Data Paket</h2>
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

                  <form class="" action="" method="post" novalidate="" enctype="multipart/form-data" >
                    <span class="section">Paket</span>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Paket<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="1" name="nama"  required="required">
                      </div>
                    </div>

         
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Jenis <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">

                      <select name="id_jenis" class="form-control" >
                            <option value="">-Pilih-</option>
                         <?php
                            include "backend/koneksi.php";
                            $sql = mysqli_query ($koneksi, "select * from tb_jenis");
                            while ($result = $sql->fetch_assoc()) {
                            ?>
                               <option value="<?php echo $result['id_jenis']; ?>"><?php echo $result['nama']; ?></option>                   
                                <?php }
                          ?>
                        </select>
                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Fasilitas <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <textarea name="fasilitas" class="form-control" id="" >
<li></li>
                        </textarea>

                      </div>

                    </div>

                    


                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Harga <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="number" name="harga"  required="required"></div>
                    </div>

                    
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Waktu <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="number" name="waktu"  required="required"></div>
                    </div>

                    <div class="ln_solid">
                      <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                    <button type="submit" name="kirim" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                        </div>
                      </div>
                    </div>
                  </form>


                </div>
              </div>
            </div>