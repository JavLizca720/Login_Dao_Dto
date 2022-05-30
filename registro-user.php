<?php
$title = "Registro de usuario";
include_once "includes/head.php";
//include_once "includes/header.php";
session_start();
if (isset($_SESSION['nombre'])){
    header('Location:dashboard.php');
}
?>
<body class= "container m-0 row justify-content-center ">
<div class="row">
<div class="col-md-4 "></div>
<div class="col-md-4 ">
<form action="controladores/controlador.usuarios.php" method="POST">
<h3 class="text" > Registro</h3>
<label for="" >Nombre</label>
<input type="text" name="nombre" id="nombre" required class="form-control"><br>
<label for="" >Apellido</label>
<input type="text" name="apellido" id="apellido" required class="form-control"><br>
<label for="" >Genero</label>
<select name="genero" id="genero" id="genero" required class="form-control">
  <option value="">Seleccione su genero</option>
  <option value="1">Femenino</option>
  <option value="2">Masculino</option>
  <option value="3">Inclusive</option>
</select><br>
<label for="" >Nombre de usuario</label>
<input type="text" name="username" id="username" required class="form-control"><br>
<label for="" >Contraseña</label>
<input type="password" name="clave" id="clave" required class="form-control"><br>
<label for="" >Repite la contraseña</label>
<input type="password" name="clave2" id="clave2" required class="form-control"><br>
<input type="submit" name="registro" id="registro" value="Registrarse" class="btn btn-primary">
<a href="index.php" class="btn btn-info ">Inicio</a>

</form>
</div>
<div class="col-md-4 mt-4"></div>

<?php 
    if(isset($_GET['mensaje'])){
        ?>

        <div class="row"> <br><br>
            <div class="col-md-6"></div>
            <div class="col-md-4 text-center"><h4><?php echo $mensaje = $_GET['mensaje']?>
            </h4></div>
            <div class="col-md-5"></div>
                   </div>


        <?php 
          }
?>
</body>
<?php
include_once "includes/footer.php";
?>
