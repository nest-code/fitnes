
<?php
session_start(); 

$user_username=$_SESSION['nama_akun'];
$nama=$_SESSION['nama'];
$level=$_SESSION['level'];
$foto=$_SESSION['foto'];



if(! isset($_SESSION['nama_akun'])){
  header("location: page/login.php"); 
}else{

  include_once 'backend/perusahaan_index.php';

  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href=" upload/profil/<?php echo $result['logo']; ?>" type="image/png"/>
    <title><?php echo $result['nama']; ?></title>
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/build/css/build/sweetalert.css" rel="stylesheet">
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <link href="assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <link href="assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <link href="assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <link href="assets/build/css/custom.min.css" rel="stylesheet">
  </head>



  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="?halaman=beranda" class="site_title"><i class="fa fa-paw"></i><span>  <?php echo $result['nama']; ?></span></a>
            </div>

            <div class="clearfix"></div>


            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="backend/foto/<?php echo($foto)?> " alt="..." class="img-circle profile_img">
              </div>

              <div class="profile_info">
                <span>Hallo, <?php echo($nama)?></h2></span>
                <h2>  <?php echo($level)?> </h2>
              </div>
            </div>


            <br />

            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="?halaman=beranda"><i class="fa fa-home"></i> Beranda </a></li>
                  <li><a><i class="fa fa-bug"></i> Fitness <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?halaman=member">Member</a></li>
                      <li><a href="?halaman=paket">Paket</a></li>
                      <li><a href="?halaman=jenis">Jenis</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-money"></i> Pembayaran <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="?halaman=pembayaran&aksi=langsung">Pembayaran Langsung</a></li>
                      <li><a href="?halaman=pembayaran&aksi=konfirmasi">Konfirmasi Pembayaran</a></li>
                      <li><a href="?halaman=pembayaran">Data Pembayaran</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="?halaman=laporan">Laporan</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">
                  <li><a href="?halaman=pengguna"><i class="fa fa-group"></i> Pengguna </a></li>
                  <li><a href="?halaman=perusahaan"><i class="fa fa-gears"></i> Pengaturan </a></li>
                  <li><a href="../"><i class="fa fa-sitemap"></i> Halaman Website </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>


        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo($nama)?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="?halaman=profil"> Profile</a>
                    <a class="dropdown-item"  href="?halaman=logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>

        <div class="right_col" role="main">
          <div class="row" style="display: inline-block;" ></div>
          <?php include 'page.php'; ?>
        </div>

        <footer>
          <div class="pull-right">
           Fitness by <a href="https://colorlib.com">Fitness</a>
          </div>
          <div class="clearfix"></div>
        </footer>

      </div>
    </div>

    <?php }?>

  <script src="assets/vendors/validator/multifield.js"></script>
  <script src="assets/vendors/validator/validator.js"></script>


  <script>
    var validator = new FormValidator({ "events": ['blur', 'input', 'change'] }, document.forms[0]);
    document.forms[0].onsubmit = function (e) {
      var submit = true,
        validatorResult = validator.checkAll(this);
      console.log(validatorResult);
      return !!validatorResult.valid;
    };
    document.forms[0].onreset = function (e) {
      validator.reset();
    };
    $('.toggleValidationTooltips').change(function () {
      validator.settings.alerts = !this.checked;
      if (this.checked)
        $('form .alert').remove();
    }).prop('checked', false);
  </script>


  
 

    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/fastclick/lib/fastclick.js"></script>
    <script src="assets/vendors/nprogress/nprogress.js"></script>
    <script src="assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>


    <script src="assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <script src="assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <script src="assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    
    <script src="assets/vendors/iCheck/icheck.min.js"></script>
    <script src="assets/vendors/skycons/skycons.js"></script>

    <script src="assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>

    

    <script src="assets/vendors/Flot/jquery.flot.js"></script>
    <script src="assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="assets/vendors/Flot/jquery.flot.resize.js"></script>
    <script src="assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <script src="assets/vendors/DateJS/build/date.js"></script>
    <script src="assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="assets/vendors/moment/min/moment.min.js"></script>

        <!-- Datatables -->

    <script src="assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="assets/build/js/custom.min.js"></script>

    <script>
           $(document).ready(function () {
               $('#dataTables-example').dataTable();
           });
    </script>
    
	
  </body>
</html>
