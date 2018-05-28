
<!--CONTENEDOR GENERAL-->


  <!--GALERIA-->

<div class="row">
  <?php
  if(isset($query)) {
    
  for($i=0;$i<count($query);$i++){
    
    ?>
  <div class="foto col-xs-12 col-sm-12 col-md-3 col-lg-3"> <img  class="imagen" src="data:image/jfif;base64,<?php echo base64_encode($query[$i]->foto)?>"  alt="New York" width="230" height="320"/><div class="imagen_a"><h5>Duracion:<?php echo $query[$i]->duracion; ?> min</h5><h5>Titulo:<?php echo $query[$i]->titulo; ?></h5></div></div> 
  <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9"> <h2>FICHA TECNICA</h2><div>
    <h5>Titulo:<?php echo $query[$i]->titulo; ?></h5></div>
  </div>

  <?php
}

//aqui se acaba la primera parte con la ficha tecnica
//empieza el formulario de horarios y compra
 ?>
</div>

 <div class="container-fluid"> 
 <?php echo validation_errors();
 
$attributes = array('class' => 'form-inline', 'id' => 'buscar');
 $this->load->helper('form');
echo form_open('cine_controller/form_horario', $attributes);
?>
       <div class="input-group-btn">
            <div class="input-group">
         <div class="btn-toolbar" role="toolbar" aria-label="Dias ">
         <div class="btn-group" role="group" aria-label="Dias">Lunes</div>
         <div class="btn-group" role="group" aria-label="Dias">Martes</div>
         <div class="btn-group" role="group" aria-label="Dias">Miercoles</div>
</div>


</div>
</div>
</form>            	
</div>

}
?>

</div> <!--CIERRRO CONTENEDOR GENERAL-->

<!-- -->