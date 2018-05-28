<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Pagina CineSI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/estilos.css"> 
      <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/sample.js"></script>
 
</head>
<body>
  <!--NAVEGADOR-->
  <header>
  <div class="navbar-header">
       <h1 class="color text-center">CINE</h1>
    </div>
    <br><br>
  <nav>
  <div class="container-fluid">
    
   <div>
    <br><br>
   
   <input type="text" id="nombrepelicula" name="nombrepelicula" > <button type="button" id="buscar" name="buscar">Buscar</button>
 
  </div>
<div>
    <ul class="nav navbar-nav navbar-right">
      <li><a style="color:blue" href="<?php echo site_url();?>/cine_controller/">Inicio</a></li>
      <li><a style="color:blue" href="<?php echo site_url();?>/cine_controller/cartelera">Cartelera</a></li>
      <li><a  style="color:blue" href="<?php echo site_url();?>/cine_controller/reservas">Reservas</a></li>
     
    </ul>
  </div></div>
</nav>

</header>
<br><br>