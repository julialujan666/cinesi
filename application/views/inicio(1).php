<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container fluid">
		   <div class="main row">		
		
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">			

<?php
echo "<table ><tbody>";
 if(isset($query)) {
     $this->load->model('peliculas_model','',TRUE);      
	for($i=0;$i<count($query);$i++){
	 /* $data1 = array(
	       array('nombre', $query[$i]->nombre),
	       array('dni', $query[$i]->dni,
	       array('email', $query[$i]->email),
	       array('direccion',$query[$i]->direccion),
	       array('telefono',$query[$i]->telefono)
        );*/
//$base64 = 'data:image/jfif;base64,' . base64_encode($data);
   
echo "<tr><td>".$query[$i]->titulo."</td></tr><tr><td>".$query[$i]->titulooriginal."</td></tr>
<tr><td>".$query[$i]->id_genero."</td></tr><tr><td>".$query[$i]->duracion."</td></tr><tr><td><div>

 <img src='data:image/jfif;base64,". base64_encode($query[$i]->foto) ."'>
</div> </td></tr>";
}}
echo "</tbody></table";
?>
</div></div></div><br><br>
