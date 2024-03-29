<?php 
    $peliculas = $this->d["peliculas"];
?>
<nav class="cabecera_pelicula">
    <div class="pelicula_fondo"> <span>PELÍCULAS</span> </div>
    <div class="pelicula_link link_primero"><a href="user/barraRedirect/peliculas"><span>En cartelera</span></a></div>
    <div class="pelicula_link_activo"><a href="user/barraRedirect/proximamente"><span>Próximamente</span></a></div>
</nav>

<section class="contenedor_peliculas">
<?php foreach($peliculas as $pelicula){
?>
    <div class="pelicula_individual">
        <div class="contenedor_imagen">
            <img class="pelicula_imagen" src="public/img/photos/<?php echo $pelicula->getFoto(); ?>">
            <a href="user/barraRedirect/pelicula_detalle/<?php echo $pelicula->getId(); ?>"><i class="fa-solid fa-circle-plus circulo_mas"></i></a>
        </div>
        
        <h2 class="pelicula_titulo"><?php echo $pelicula->getNombre() ?></h2>
    </div>
<?php
} ?>    
</section>


<script>
    window.addEventListener("scroll",function(){
        var header = document.querySelector(".cabecera");
        header.classList.toggle("fixed",window.scrollY);
    });
</script>