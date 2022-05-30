<?php
// print_r($_POST); 
session_start();
require '../utilidades/conexion.php';
$cnn = Conexion::getConexion();
$username = $_POST['username'];
//$contra = $_POST['clave'];
$contra = (sha1($_POST['clave']));
$sentencia = $cnn->prepare("SELECT * FROM user WHERE username = ? and  clave = ?;");
$sentencia->execute([$username, $contra]);
$valor = $sentencia->fetch(PDO::FETCH_OBJ);
//print_r($valor); 

if ($valor === FALSE) {
    header("Location: ../index.php?msg='Datos incorrectos.'");
} else if ($sentencia->rowCount() == 1) {
    $_SESSION["username"] = $valor->username;
    $_SESSION["nombre"] = $valor->nombre;
    $_SESSION["genero"] = $valor->genero;
    $_SESSION["idUser"] = $valor->id;
    header("Location: ../dashboard.php");
}




?>