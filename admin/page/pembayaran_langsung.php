<?php include_once 'backend/perusahaan_print.php';?>

<?php include 'backend/perusahaaan_pembayaran_langsung.php'?>

<div class="row">

  <div class="col-md-12 col-sm-4 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Form Wizards <small>Sessions <a href="backend/perusahaan_select_index.php">a</a></small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>


      <div class="x_contenst">




        <div id="wizard" class="form_wizard wizard_horizontal">
          <ul class="wizard_steps anchor">
            <li>
              <a href="#step-1" class="selected" isdone="1" rel="1">
                <span class="step_no">1</span>
                <span class="step_descr">
                  Langkah 1<br>
                  <small>Langkah 1 : Data Diri</small>
                </span>
              </a>
            </li>
            <li>
              <a href="#step-2" class="disabled" isdone="0" rel="2">
                <span class="step_no">2</span>
                <span class="step_descr">
                  Langkah 2<br>
                  <small>Langkah 2 : Pilih Member</small>
                </span>
              </a>
            </li>
            <li>
              <a href="#step-3" class="disabled" isdone="0" rel="3">
                <span class="step_no">3</span>
                <span class="step_descr">
                  Langkah 3<br>
                  <small>Langkah 3 : Pembayaran dan Transaksi</small>
                </span>
              </a>
            </li>
            <li>
              <a href="#step-4" class="disabled" isdone="0" rel="4">
                <span class="step_no">4</span>
                <span class="step_descr">
                  Langkah 4<br>
                  <small>Langkah : 4 Cetak Kartu</small>
                </span>
              </a>
            </li>
          </ul>

          <br><br>

          <div class="stepContainer">
            <form action="" method="get">
              <div id="step-1" class="content" style="display: block;">
                <div class="field item form-group">
                  <br>
                  <label class="col-form-label col-md-3 col-sm-3  label-align">Nama<span
                      class="required">*</span></label>
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="1" name="nama"
                      placeholder="ex. John f. Kennedy" required="required">
                  </div>
                </div>

                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align">Jenis Kelamin<span
                      class="required">*</span></label>
                  <div class="col-md-3 col-sm-3">
                    <select name="jk" class="form-control">
                      <option value="">-Pilih-</option>
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                  
                  <div class="col-md-3 col-sm-3">
                    <input class="form-control" type="date" name="tgl_lahir" required="required">
                  </div>
                </div>

                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Lahir<span
                      class="required">*</span></label>
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
                  <label class="col-form-label col-md-3 col-sm-3  label-align">email<span
                      class="required">*</span></label>
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" name="email" required="required" type="email"></div>
                </div>

                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor Hp <span
                      class="required">*</span></label>
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" type="number" name="no_hp" required="required"></div>
                </div>
              </div>

              <div id="step-2" class="content" style="display: none;">
                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal <span
                      class="required">*</span></label>
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" type="date" value="<?php echo date('Y-m-d');?>" readonly>
                  </div>
                </div>


                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align">Jenis <span
                      class="required">*</span></label>
                  <div class="col-md-6 col-sm-6">

                    <select name="id_jenis" class="form-control">
                      <option value="">-Pilih-</option>
                      <?php
                                    include "backend/koneksi.php";
                                    $sql = mysqli_query ($koneksi, "select * from tb_paket");
                                    while ($data = $sql->fetch_assoc()) {
                                    ?>
                      <option value="<?php echo $data['id_paket']; ?>"><?php echo $data['nama']; ?></option>
                      <?php }
                                ?>
                    </select>
                  </div>
                </div>


                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align">Harga <span
                      class="required">*</span></label>
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" type="number" readonly>
                  </div>
                </div>
              </div>
         


            <div id="step-3" class="content" style="display: none;">
              <div class="x_panel">
                <div class="x_title">
                  <h2>PEmbayaran <small>Cetak Pembayaran</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                          class="fa fa-wrench"></i></a>
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

                  <section class="content invoice">
                    <!-- title row -->

                    <!-- info row -->
                    <div class="row invoice-info">
                      <div class="col-sm-4 invoice-col">
                        Dari
                        <address>
                          <strong><?php echo $result['nama']; ?></strong>
                          <br><?php echo $result['alamat']; ?>
                          <br><?php echo $result['no_hp']; ?>
                          <br><?php echo $result['email']; ?>
                        </address>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-4 invoice-col">
                        To
                        <address>
                          <strong>John Doe</strong>
                          <br>795 Freedom Ave, Suite 600
                          <br>New York, CA 94107
                          <br>Phone: 1 (804) 123-9876
                          <br>Email: jon@ironadmin.com
                        </address>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-4 invoice-col">
                        <b>Invoice #007612</b>
                        <br>
                        <br>
                        <b>Order ID:</b> 4F3S8J
                        <br>
                        <b>Payment Due:</b> 2/22/2014
                        <br>
                        <b>Account:</b> 968-34567
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                      <div class="  table">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>Qty</th>
                              <th>Product</th>
                              <th>Serial #</th>
                              <th style="width: 59%">Description</th>
                              <th>Subtotal</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Call of Duty</td>
                              <td>455-981-221</td>
                              <td>El snort testosterone trophy driving gloves handsome gerry Richardson helvetica
                                tousled street art master testosterone trophy driving gloves handsome gerry Richardson
                              </td>
                              <td>$64.50</td>
                            </tr>

                          </tbody>
                        </table>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="pull-right">
                      <div class="row">
                        <div class="">
                          <p class="lead">Payment Methods:</p>
                          <img src="assets/production/images/visa.png" alt="Visa">
                          <img src="assets/production/images/mastercard.png" alt="Mastercard">
                          <img src="assets/production/images/american-express.png" alt="American Express">
                          <img src="assets/production/images/paypal.png" alt="Paypal">
                        </div>
                      </div>
                    </div>



                    <!-- this row will not appear when printing -->
                    <div class="pull-left">
                      <div class="row">
                        <div class="row no-print">
                          <button class="btn btn-success pull-right" style="margin-left: 10px;"
                            onclick="window.location.href='Students.html';"><i class="fa fa-download"></i>
                            Download</button>
                          <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i
                              class="fa fa-credit-card"></i> Bayarkan</button>
                        </div>
                      </div>
                    </div>

                  </section>
                </div>
              </div>

            </div>

            <div id="step-4" class="content" style="display: none;">

            </div>

      


          </div>

        </div>
          <div>
            <button type="submit">asd</button>
            </div>
            </form>
      </div>
    
    </div>
  </div>
</div>