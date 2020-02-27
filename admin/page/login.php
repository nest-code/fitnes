
<?php
session_start(); 

if(isset($_SESSION['nama_akun'])){
  header("location:..?halaman=beranda"); 
}else{

  include_once '../backend/login_index.php';
  
  

  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $result['nama']; ?></title>

    <link href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="../assets/vendors/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="../backend/login_cek.php" method="post">
              <h1>Masuk Sistem</h1>
              <div>
                <input type="text" name="nama_akun" class="form-control" placeholder="Nama Akun" required="" />
              </div>
              <div>
                <input type="password" name="kata_sandi" class="form-control" placeholder="Kata Sandi" required="" />
              </div>

                <div class="pull-right">
                    <button type="submit" name="kirim" class="btn btn-primary">Masuk</button>
                    <!-- <button type="reset" class="btn btn-default">Reset</button> -->
                        </div>
              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i><?php echo $result['nama']; ?></h1>
                  <p><?php echo $result['slogan']; ?></p>
                </div>
              </div>
            </form>
          </section>
        </div>

      
      </div>
    </div>
  </body>
</html>
<?php }?>

