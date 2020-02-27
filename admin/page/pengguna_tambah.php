<?php
include 'backend/pengguna_insert.php';
?>

<div class="page-title">
              <div class="title_left">
                <h3>Data Pengguna</h3>
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
                  <h2>Tambah Data Pengguna</h2>
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
                    <span class="section">Data Diri</span>

                 
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Nama<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="1" name="nama" placeholder="ex. John f. Kennedy" required="required">
                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Jenis Kelamin<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <select name="jk" class="form-control" >
                            <option value="">-Pilih-</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Lahir<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="date" name="tgl_lahir" required="required">
                      </div>
                    </div>

                    
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat</label>
                      <div class="col-md-6 col-sm-6">
                        <textarea class="form-control" name="alamat"></textarea>
                      </div>
                    </div>


                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">email<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="email" required="required" type="email"></div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor Hp <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="number" name="no_hp"  required="required"></div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Akun<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="1" name="nama_akun"  required="required">
                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Kata Sandi<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="password" name="kata_sandi" data-validate-length="6,8" required="required"></div>
                    </div>
                    
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Ulangi Kata Sandi<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="password"  data-validate-linked="kata_sandi" required="required"></div>
                    </div>


                    

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Level<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <select name="level" class="form-control" >
                            <option value="">-Pilih-</option>
                            <option value="Admin">Admin</option>
                            <option value="Petugas">Petugas</option>
                            <option value="Pimpinan">Pimpinan</option>
                            <option value="Insfrastruktur">Insfrastruktur</option>
                        </select>
                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Foto <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                          <input class="form-control" type="file" name="foto">
                      </div>
                      <span>*kosongkan jika tidak memasukan foto</span>

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