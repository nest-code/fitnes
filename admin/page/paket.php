<div class="page-title">
              <div class="title_left">
                <h3>Data Paket</h3>
                <div class="input-group">
                <a href="?halaman=paket&aksi=tambah"> <button class="btn btn-primary" ><i class="fa fa-add"></i> Tambah Data</button> </a>
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

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Paket</h2>
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
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="dataTables-example"class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th style="width:4%;">No</th>
                          <th>Nama Paket</th>
                          <th>Jenis</th>
                          <th>Harga</th>
                          <th>Waktu</th>
                          <th  style="text-align:center" >Aksi</th>
                        </tr>
                      </thead>


               <tbody>
               <?php
                    include 'paket_data.php';
              ?>
               </tbody>
                    </table>
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
