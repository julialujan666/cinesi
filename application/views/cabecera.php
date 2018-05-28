<!--CABECERA-->


<!--MENU HAMBURGUESA-->

<!--navbar navbar-default navbar-fixed-top" role="navigation"-->

  <header >

    <img  id="menu" src="<?php echo base_url();?>imagenes/menu.png">
   
    
        <p class="logo" style="color: #A95291;padding-top:6%"><span>C</span>ine <span>S</span>i</P>

     

     <nav  id="navegador" style="background-color:black;" >
    
          <div class="container-fluid">
            <p>
            <form class="form-inline" style="text-align:right">
            <div class="input-group">
             <input type="email" class="form-control" style="background-color:#FAF2F8;" size="50" placeholder="Busca la pelicula" required>
             <div class="input-group-btn">
             <button type="button" style="background-color:#A95291" class="btn btn-danger">Buscar</button>
           </div>
          </div>
        </form>

  </p>

    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav ">
      <li><a href="" style="font-family: 'Roboto Mono', monospace;">Inicio</a></li>
      <li><a href=" " style="font-family: 'Roboto Mono', monospace;">Cartelera</a></li>
      <li><a href="#" style="font-family: 'Roboto Mono', monospace;">Venta Anticipada</a></li>
      <li><a href="#" style="font-family: 'Roboto Mono', monospace;">Contacto</a></li>
       <li><a href="#"></a></li
    </ul>
  </div>
</nav>
</header>




<script type="text/javascript">

var menu=document.getElementById("menu");
var navegador=document.getElementById("navegador");



window.addEventListener("scroll",menuFijo);
function menuFijo() {
    console.log(window.scrollY); // buscar el valor del scroll en Y de la consola
    if (window.scrollY>48) {
        navegador.classList.add("fijo"); //aÃ±ado la clase fijo
    }
    else{
        navegador.classList.remove("fijo");
    }
}



menu.addEventListener("click", mostrar);

function mostrar() {
    if (navegador.style.display!="block") {
        navegador.style.display="block";
    }
    else{
        navegador.style.display="none";
    }

  


}
</script>
