 <div class="container-fluid"> 
 <?php echo validation_errors();
 
$attributes = array('class' => 'form-inline', 'id' => 'buscar');
 $this->load->helper('form');
echo form_open('cine_controller/buscar', $attributes);
?>
       <div class="input-group-btn">
            <div class="input-group">
             <select  name="genero" id="genero" class="select"  >
              <option  value="0" selected>Elegir genero </option>
              <?php 
             

           if(isset($query)){
            for($i=0;$i<count($query);$i++){
            //generar la lista dinamico
              echo "<option style='color:black' value='".$query[$i]->id_genero."'>".$query[$i]->genero."</option>";
             
          }}
  ?>
             </select></div>
           
  
          <input type="text" class="form-control" style="background-color:#FAF2F8;" size="50" name="titulo" placeholder="Busca la pelicula por nombre " > 
             
             <button type="submit" style="background-color:#A95291" class="btn btn-danger">Buscar</button>
           </div>
          
        </form></div>