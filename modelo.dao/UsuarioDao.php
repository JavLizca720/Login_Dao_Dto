<?php
class UsuarioDao{
  
    function consultarPorUsername($username)
    {
        $cnn = Conexion::getConexion();
        try {
            $query = $cnn->prepare("SELECT * FROM user WHERE username = ?");
            $query->bindParam(1, $username);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            $mensaje = "Error: " . $ex->getMessage() . ".";
        }
        $cnn = null;
        return $mensaje;
    }
    
    public function registrarUsuario(UsuarioDto $usuarioDto){
        $cnn = Conexion::getConexion();
        $mensaje = ""; 
        try{
            $query = $cnn->prepare("INSERT INTO user values (?,?,?,?,?,?)");
            $query->bindParam(1, $usuarioDto->getId());
            $query->bindParam(2, $usuarioDto->getNombre());
            $query->bindParam(3, $usuarioDto->getApellido());
            $query->bindParam(4, $usuarioDto->getGenero());
            $query->bindParam(5, $usuarioDto->getUsername());
            $query->bindParam(6, $usuarioDto->getClave());
    
            $query->execute();
            $mensaje ="Bien" ;  
            header("Location:../registro-user.php?msg=$mensaje");
        } catch (Exception $ex){
            $mensaje = $ex->getMessage();
        }
    
        $cnn= null;
        return $mensaje;
    }

function consultarGenero($id)
{
    $cnn = Conexion::getConexion();
    try {
        $query = $cnn->prepare("SELECT * FROM user WHERE genero = ?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    } catch (Exception $ex) {
        $mensaje = "Error: " . $ex->getMessage() . ".";
    }
    $cnn = null;
    return $mensaje;
}

// modificar usuario
 function modificarUsuario(UsuarioDto $usuarioDto){

$cnn = Conexion::getConexion();
$mensaje = "";
try{
    $query = $cnn->prepare("UPDATE user SET nombre=?,apellido=?, genero=?, username=?, clave=? WHERE id=?");
    $query->bindParam(1, $usuarioDto->getNombre());
    $query->bindParam(2, $usuarioDto->getApellido());
    $query->bindParam(3, $usuarioDto->getGenero());
    $query->bindParam(4, $usuarioDto->getUsername());
    $query->bindParam(5, $usuarioDto->getClave());
    $query->bindParam(6, $usuarioDto->getId());
    $query->execute();
    $mensaje = "Registro Actualizado"; 
} catch (Exception $ex){
    $mensaje = $ex->getMessage();
}
$cnn=null;
return $mensaje;
}

// obtener usuario 
public function obtenerUsuario($id){
    $cnn = Conexion::getConexion();
    $mensaje = "";
    try{
        $query = $cnn->prepare('SELECT * FROM user WHERE id = ?');
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch(); 
    } catch (Exception $ex){
        echo 'Error'.$ex->getMessage();
    }
    $cnn=null;
    return $mensaje; 
}

## eliminar Usuario 

public function eliminarUsuario($id){
    $cnn = Conexion::getConexion();
    $mensaje = "";
    try{
        $query = $cnn->prepare("DELETE FROM user WHERE id = ?");
        $query->bindParam(1, $id);
        $query->execute();
        $mensaje = "Registro Eliminado";
    }catch (Exception $ex){
        $mensaje = $ex->getMessage();
    }
    return $mensaje; 
}

## listar todos 

public function listarTodos(){
    $cnn = Conexion::getConexion();
try{
    $listarUsuarios = 'SELECT * FROM user'; 
    $query = $cnn->prepare($listarUsuarios);
    $query->execute();
    return $query->fetchAll();
}catch (Exception $ex){
    echo 'Error'.$ex->getMessage();
}

}
}




?>