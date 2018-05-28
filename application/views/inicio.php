<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cine Si</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Faster+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Faster+One|Frijole" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Faster+One|Frijole|Monoton" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet"> 


  <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Cinzel|Sintony" rel="stylesheet"> 

  <link href="https://fonts.googleapis.com/css?family=Atomic+Age" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/estilos.css"/>
  <style type="text/css">
 
 
  h1{
    text-align: center;
  }
  h3{
    margin-bottom: 4%;
  }
    /** {
                outline: solid red 1px;
            }**/
 
    .arriba{
      margin-top: 3%;
    }
    .abajo{
      margin-bottom: 3%;
      margin-left: 9%;
    }



  </style>
</head>
<body>
<?php include("cabecera.php"); ?>
</nav>
</header>
  <!-- CARRUSEL-->
  <div id="contenido1" class="fondo">

  <div  class="container-fluid " style="width:60%;padding-top:0%;border:1px solid #A95291">
  <h2></h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    

    <!-- Wrapper for slides -->
    <div class="carousel-inner">




      <div  class="item active">
        <img src="<?php echo base_url();?>imagenes/cine20.jpg" alt="Los Angeles" style="width:100%;">
        <div   class="carousel-caption alinearLetra ">
          <h3 class="portada1Letra "></h3>
      
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>imagenes/cine18.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption alinearLetra2">
          <h3 class="portada1Letra"></h3>
        
        </div>
      </div>

    
      <div class="item">
        <img src="<?php echo base_url();?>imagenes/cine15.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption alinearLetra">
          <h3 class="portada1Letra "></h3>
       
        </div>
      </div>



      <div class="item">
        <img src="<?php echo base_url();?>imagenes/cine19.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption alinearLetra">
          <h3 class="portada1Letra "></h3>
                 
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>imagenes/cine22.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption alinearLetra">
          <h3 class="portada1Letra ">DESCANSO</h3>
          <p> <!--boton-->
                  <a href="http://localhost/sqlite/PaginaHostal/HostaYServicios.php"><button type="button" class="btn btn-success">Nuestro servicios</button></a>
          </p>        
        </div>
      </div>

      </div>
  
   


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>



  </div>
</div> <!-- CIERRO CARRUSSELL-->
</div> <!--CIERRO CONTENIDO1-->



<!--CONTENEDOR GENERAL-->

<div id="contenedorGeneral" class="cuerpo">

  <h3 class="titulo3">PROXIMOS EXTRENOS</h3>
  <!--GALERIA-->

<div class="row espacioExtrenos">
  <div class="col-sm-2"> <img src="<?php echo base_url();?>imagenes/extreno1.jpg" class="bordeImg" alt="New York" style="width:100%;"></div>
  <div class="col-sm-1"></div>
  <div class="col-sm-2"><img src="<?php echo base_url();?>imagenes/extreno2.jpg" class="bordeImg"  alt="New York" style="width:100%;"></div>
    <div class="col-sm-1"></div>
    <div class="col-sm-2"><img src="<?php echo base_url();?>imagenes/extreno3.jpg" class="bordeImg"  alt="New York" style="width:100%;"></div>
    <div class="col-sm-1"></div>
    <div class="col-sm-2"><img src="<?php echo base_url();?>imagenes/extreno4.jpg" class="bordeImg"  alt="New York" style="width:100%;"></div>
</div>

<div class="row">
  <div class="col-sm-2"><img src="<?php echo base_url();?>imagenes/extreno5.jpg" class="bordeImg"  alt="New York" style="width:100%;"></div>
  <div class="col-sm-1"></div>
  <div class="col-sm-2"><img src="<?php echo base_url();?>imagenes/extreno6.jpg" class="bordeImg"  alt="New York" style="width:100%;"></div>
    <div class="col-sm-1"></div>
    <div class="col-sm-2"><img src="<?php echo base_url();?>imagenes/extreno7.jpg"  class="bordeImg" alt="New York" style="width:100%;"></div>
    <div class="col-sm-1"></div>
    <div class="col-sm-2"><img src="<?php echo base_url();?>imagenes/extreno8.jpg"  class="bordeImg" alt="New York" style="width:100%;"></div>
</div>




  </div> <!-- CIERRO GALERIA-->



</div> <!--CIERRRO CONTENEDOR GENERAL-->





<?php include("pie.php"); ?>



</body>
</html>