<?php
$title = "Index";
include_once "includes/head.php";
//include_once "includes/header.php";
session_start();
if (isset($_SESSION['nombre'])){
    header('Location:dashboard.php');
}
?>


<body>
<div class="container" > <br>
    <center>
    <form  method="POST" action="utilidades/login-proceso.php">
    <div class="form-group col-4">
    <label   for="">Usuario:</label>
    <input class= "form-control"  type="text" name="username"> <br>
    </div>
    <div class="form-group col-4">
    <label  for="">Contraseña:</label>
    <input class= "form-control"  type="password" name="clave"><br> 
    </div>
    <input  class="btn btn-info btn-lg" type="submit" value="Iniciar Sesión">
    <a href="registro-user.php" class="btn btn-info btn-lg">Registro</a>
        </form>
        </center>
    </div>
</body>
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
<?php
include_once "includes/footer.php";
?>
