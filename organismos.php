
<?php 
include_once 'UrlMeta.class.php';
$status='danger';
$url='';

if(isset($_POST['url'])){ 
    $url = $_POST['url']; 
     
    try{ 
        // Initialize URL meta class 
        $urlMeta = new UrlMeta($url); 
         
        // Get meta info from URL 
        $metaDataJson = $urlMeta->getWebsiteData(); 
         
        // Decode JSON data in array 
        $metaData = json_decode($metaDataJson); 
    }catch(Exception $e){ 
        $statusMsg = $e->getMessage(); 
    } 
} 
 
?>

<?php
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']==='on'){
  $u="http://";
}else{
  $u="http://";
  $u.=$_SERVER['HTTP_HOST'];
  $u.=$_SERVER['REQUEST_URI'];
  $u;
}
$pagina=$u;
$segundos="5";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!--meta http-equiv="refresh" content="<?php echo $segundos;?>" URL="<?php echo $pagina;?>"-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Telemetria Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!--ESTILOS-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>
    .activa {
      background-color: #606b7b !important;
    }

    .sidebar-dark-primary {
      background-color: #791429;
    }
  </style>

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="./" class="nav-link">Inicio</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contacto</a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="./" class="brand-link">
        <span class="brand-text font-weight-light"><strong>CGTI</strong> Network monitor</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <div class="mt-3 mb-3 d-flex justify-content-center">
          <img src="images/logo.png" class="img-fluid" style="width: 80%;">
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
              <center>
                <a href="index.php" class="nav-link" id="mnu_Inicio">
                  <img src="images/home.png" alt="" class="img-fluid" style="width: 64px;"><br>
                  <p class="text-decoration-none">Inicio</p>
                </a>
              </center>
            </li>


            <li class="nav-item">
              <center>
                <a href="javascript:void(0);" class="nav-link" id="mnu_Servidores">
                  <img src="images/servers.png" alt="" class="img-fluid" style="width: 64px;"><br>
                  <p class="text-decoration-none">Servidores</p>
                </a>
              </center>
            </li>



            <li class="nav-item">
              <center>
                <a href="dependencias.php" class="nav-link" id="mnu_Dependencias">
                  <img src="images/dependencias.png" alt="" class="img-fluid" style="width: 64px;"><br>
                  <p class="text-decoration-none">Dependencias</p>
                </a>
              </center>
            </li>



            <li class="nav-item">
              <center>
                <a href="organismos.php" class="nav-link activa" id="mnu_OPDs">
                  <img src="images/opds.png" alt="" class="img-fluid" style="width: 64px;"><br>
                  <p class="text-decoration-none">OPDs</p>
                </a>
              </center>
            </li>


            <li class="nav-item">
              <center>
                <a href="javascript:void(0);" class="nav-link" id="mnu_Analitica">
                  <img src="images/analitica.png" alt="" class="img-fluid" style="width: 64px;"><br>
                  <p class="text-decoration-none">Anal??tica</p>
                </a>
              </center>
            </li>



            <li class="nav-item">
              <center>
                <a href="javascript:void(0);" class="nav-link" id="mnu_Usuarios">
                  <img src="images/users.png" alt="" class="img-fluid" style="width: 64px;"><br>
                  <p class="text-decoration-none">Usuarios</p>
                </a>
              </center>
            </li>



            <li class="nav-item">
              <center>
                <a href="javascript:void(0);" class="nav-link" id="mnu_Salir">
                  <img src="images/salir.png" alt="" class="img-fluid" style="width: 64px;"><br>
                  <p class="text-decoration-none">Salir</p>
                </a>
              </center>
            </li>



          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

              <h1 class="m-0">Panel de Control Organismos</h1>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <!-- Inicio carta -->
          <div class="row">
            <div class="col-lg-3">
              <div class="card">
                <div class="card-body">
                  <center>
                    <h3 class="text-maroon" id="lbl_Titulo">Nayarit.gob.mx</h3>
                    <p class="text-muted small" id="lbl_Descripcion">Portal principal del Gobierno del Estado</p>
                    <p class="card-text">
                      <?php
                      
                      ?>
                      <img src="images/servicios/nayarit_gob_mx.png" class="img-fluid">
                    </p>
                  </center>
                  <div class="row">
                    <div class="col-md-3 col-lg-3">
                      <?php
                      $url = "nayarit.gob.mx";
                      //include('sitecheck.php');
                      // if (url_test($url)) {
                      if($socket =@ fsockopen($url, 80, $errno, $errstr, 30)) {
                        $comp = '<img src="images/check.png" class="img-fluid" style="width: 48px;">';
                      } else {
                        $comp = '<img src="images/cancel.png" class="img-fluid" style="width: 48px;">';
                      }
                      echo $comp
                      ?>
                    </div>
                    <div class="col-md-9 col-lg-9">
                      <i class="fas fa-clock mr-2"></i><?php echo date('H:i');?><br>
                      <!-- <i class="fas fa-comment"></i> Tiene observaciones -->
                      <i class="fas fa-comment-slash mr-2"></i>Sin observaciones<br>
                      <i class="fas fa-user mr-2"></i>Damaris Gallegos<br>
                      <a href="https://nayarit.gob.mx" target="_blank" id="btn_consultar" data-id="1" class="badge badge-primary">
                        <i class="fas fa-chart-line mr-2"></i>Consultar en vivo
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Final carta -->
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
     
            <?php if(!empty($statusMsg)){ ?>
<div class="alert alert-<?php echo $status;?>"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>




<form method="post" action="" class="form">
<!---->
<div class="card" style="width:50%; height: 400px;">
  <div class="card-body">
  <div class="form-group">
        <label>Web Page URL:</label>
        <input type="text" class="form-control" name="url" value="" required="">
    </div>
    <div class="form-group" >
        <input type="submit" class="form-control btn btn-primary" name="submit" value="Extract"/>
    </div>
  </div>

  <?php if(!empty($metaData)){ ?>

        <img src="<?php echo $metaData->image; ?>" class="card-img-top" alt="link preview image">
        <h5 class="card-title"><?php echo $metaData->title; ?></h5>
        <p class="card-text"><?php echo $metaData->description; ?></p>
        <a href="<?php echo $metaData->url; ?>" class="btn btn-primary" target="_blank">Visit site</a>

<?php } ?>  
</div>
</form>

            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2022 <a href="#">CGTI</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>