
<!--CONTENEDOR GENERAL-->


  <!--GALERIA-->

<div class="row">
  <?php
  $id=0;
  if(isset($query)) {
   
  for($i=0;$i<count($query);$i++){
     $id=$query[$i]->id_pelicula; 
    ?>
  <div class="foto col-xs-12 col-sm-6 col-md-4 col-lg-3"> <img  class="imagen" src="data:image/jfif;base64,<?php echo base64_encode($query[$i]->foto)?>"  alt="New York" width="230" height="320"/><div class="imagen_a"><h5><?php echo $query[$i]->titulo; ?></h5><a href="<?php echo site_url();?>/cine_controller/informacion/<?php echo $id;?>" >Información y ventas</a></div></div> 

  <?php
}}
?>
</div>
</div> <!--CIERRRO CONTENEDOR GENERAL-->

<!-- -->