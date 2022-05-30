<?php 
session_start();
require "./utilidades/conexion.php";
require "./modelo.dao/UsuarioDao.php";
$usuarioDao = new UsuarioDao();
$usuarioActual = $usuarioDao->consultarGenero($_SESSION["genero"]); 

if (!isset($_SESSION["username"])) {
    header("Location: index.php");
}
?>

<header>
    <nav class="navbar navbar_style navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">JAVIER LIZCA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <ul class="navbar-nav">
            <li><p class="nombreusu"><?php echo $_SESSION['nombre'] ?> |</p></li>
            <li class="profile">    <?php
            if ($usuarioActual["genero"] == 1) {
            ?>
            <img src="img/ella.png" width="35" height="35">
               <?php
            } else if ($usuarioActual["genero"] == 2){
            ?>
            <img src="img/el.png" width="35" height="35">            
        <?php
            }else if ($usuarioActual["genero"] == 3){
                ?>
                <img src="img/elle.png" width="35" height="35">       
      <?php
                }
                ?></li>
  <li class="cerrar"><a href="utilidades/cerrar-sesion.php"><img src="img/cerrar.png" width="35" height="35"></a></li>
</ul>
</header>
 
  