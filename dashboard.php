<!DOCTYPE html>

<?php
$title = "Página principal";
include_once "includes/head.php";
include_once "includes/header.php";



?>

<body class = "container" >
<div class="  d-grid gap-2 col-6 mx-auto">
    <h1 class="text-center">Login exitoso :D</h1><br>

    <?php
            if ($usuarioActual["genero"] == 1) {
            ?>
            <h2 class="text-center"> Bienvenida <?php echo $_SESSION['nombre'] ?></h2>
            <h3>Hola bella. Este es un texto de prueba exclusivo del genero FEMENINO, un gusto :D</h3>
            <?php
            } else if ($usuarioActual["genero"] == 2){
            ?>
            <h2 class="text-center"> Bienvenido <?php echo $_SESSION['nombre'] ?></h2>
            <h3>Hola Guapo. Este es un texto de prueba exclusivo del genero MASCULINO, un gusto :D</h3>
            <?php
            }else if ($usuarioActual["genero"] == 3){
                ?>
                <h2 class="text-center"> Bienvenide <?php echo $_SESSION['nombre'] ?></h2>
                <h3>Hola Amigue. Este es un texto de prueba exclusive del genero INCLUSIVE, un gusto :D</h3>
                <?php
                }
                ?>


</div> 


</body>
</html>