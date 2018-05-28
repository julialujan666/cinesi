<!-- PIE DE PAGINA -->
<footer class="container-fluid bg-4 text-center">
  <p>© copyright 2018 - Cine Si</p> 
</footer>
<script>
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
</body>
</html>