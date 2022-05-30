<?php
require "../utilidades/conexion.php";
require "../modelo.dto/UsuarioDto.php";
require "../modelo.dao/UsuarioDao.php";


if (isset($_POST["registro"])) {
    $uDto = new UsuarioDto();
    $uDao = new UsuarioDao();

    $uDto->setUsername($_POST["username"]);

    $uAux = new UsuarioDto();
    $uAux = $uDao->consultarPorUsername($uDto->getUsername());
    if ($uAux == null) {
        $uDto->setNombre($_POST["nombre"]);
        $uDto->setApellido($_POST["apellido"]);
        $uDto->setGenero($_POST["genero"]);
        $uDto->setUsername($_POST["username"]);
        $uDto->setClave(sha1($_POST['clave']));

        $uDto->setId($uDao->registrarUsuario($uDto));

    }else {
        $mensaje = "El username ingresado ya existe.";
        header("Location:../registro-user.php?msg=$mensaje");
    
    }

}
else if ($_GET['id']!=NULL){
    $uDao = new UsuarioDao();
    $mensaje = $uDao->eliminarUsuario($_GET['id']);
    header("Location:../listado.php?mensaje=".$mensaje);
}
else if (isset($_POST['modificar'])){
    $uDao = new UsuarioDao();
    $uDto = new UsuarioDto();
    $uDto->setIdUsuario($_POST['documento']);
    $uDto->setNombre($_POST['nombre']);
    $uDto->setApellido($_POST['apellido']);
    $uDto->setDireccion($_POST['direccion']);
    $uDto->setClave($_POST['clave']);

    $mensaje = $uDao->modificarUsuario($uDto);
    header("Location: ../listado.php?mensaje=".$mensaje);

}


?>
