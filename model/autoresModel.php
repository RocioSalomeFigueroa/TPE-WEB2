<?php

class autoresModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_virtual;charset=utf8','root','');
    }

    function getAutores(){
        $sentencia = $this->db->prepare("select * from autor");
        $sentencia->execute();
        $autores = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        return $autores;
        
    }

    function agregarAutor($nombre, $apellido, $fecha, $biografia){//tengo que tereminar este

        $sentencia=$this->db->prepare('INSERT INTO `autor` (`id_autor`, `nombre`, `apellido`, `fecha`, `biografia`) VALUES (?????)');
        $sentencia->execute([$nombre, $apellido, $fecha, $biografia]);
        
        return $this->db->lastInsertId();
    }

    function eliminarAutor($id){
        $sentencia = $this->db->prepare("DELETE FROM `autor` WHERE `autor`.`id_autor` = ?");
        $sentencia->execute(array($id));
    }

    function changeAutor($nombre, $apellido, $fecha, $biografia){
            //no termine todavia de hacer esta funcion 
        $sentencia = $this->db->prepare('UPDATE `Autor` SET `nombre` = ?, `apellido` = ?, `fecha` = ?, `biografia` = ?');
        $sentencia->execute([$nombre, $apellido, $fecha, $biografia]);

    }
    function getAutor($id){
        $query = $this->db->prepare('SELECT * FROM autor WHERE id_Autor = ?');
        $query->execute([$id]);
        $Autor = $query->fetch(PDO::FETCH_OBJ);
        return json_decode(json_encode($Autor), True);
    }

}
