<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Granada, ciudad paraiso</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/granada.css"> 
      <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/sample.js"></script>
 
</head>
<body>
  <!--NAVEGADOR-->
  <header>
  <nav>
  <div class="container-fluid">
    <div class="navbar-header">
       <h1 class="color text-center">GRANADA</h1>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo site_url();?>/granada_controller">Inicio</a></li>
      <li><a href="<?php echo site_url();?>/granada_controller/historia">Historia</a></li>
      <li><a href="<?php echo site_url();?>/granada_controller/galeria">Galeria</a></li>
      <li><a href="<?php echo site_url();?>/granada_controller/region">Región</a></li>
      <li><a href="<?php echo site_url();?>/granada_controller/usuario">Usuario</a></li>
    </ul>
  </div>
</nav>
</header>