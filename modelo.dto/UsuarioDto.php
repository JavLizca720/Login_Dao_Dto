<?php

class UsuarioDto{
    private $id= 0;
    private $nombre= "";
    private $apellido= "";
    private $genero= "";
    private $username= "";
    private $clave= "";

    function getId(){
        return $this->id;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getApellido(){
        return $this->apellido;
    }
    function getGenero(){
        return $this->genero;
    }

    function getUsername(){
        return $this->username;
    }

    function getClave(){
        return $this->clave;
    }

    function setId($id){
         $this->id = $id;
    }
    function setNombre($nombre){
        $this->nombre = $nombre;
   }
   function setApellido($apellido){
    $this->apellido = $apellido;
    }
    function setGenero($genero){
        $this->genero = $genero;
   }
   function setUsername($username){
    $this->username = $username;
}
   function setClave($clave){
    $this->clave = $clave;
}

}