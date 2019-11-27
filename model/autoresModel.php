<?php

class autoresModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_virtual;charset=utf8','root','');
    }

    function getAutores(){
        $sentencia = $this->db->prepare("SELECT * FROM autores");
        $sentencia->execute();
        $autores = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        return $autores;
        
    }

    function agregarAutor($nombre, $apellido, $fecha, $biografia, $imagen){//tengo que tereminar este
        
        $sentencia=$this->db->prepare('INSERT INTO autores (nombre, apellido, fecha, biografia, imagen) VALUES (?,?,?,?,?)');
        $sentencia->execute([$nombre, $apellido, $fecha, $biografia, $imagen]);
        
        return $this->db->lastInsertId();
    }

    function eliminarAutor($id_autor){
        $sentencia = $this->db->prepare("DELETE FROM `autores` WHERE `id_autor` = ?");
        $sentencia->execute(array($id_autor));
    }
    function eliminarImagenA($id_autor){
        $sentencia = $this->db->prepare("UPDATE `autores` SET imagen= null WHERE id_autor=?");
        $sentencia->execute(array($id_autor));
    }

    function editarAutor($id_autor, $nombre, $apellido, $fecha, $biografia, $imagen){
        $sentencia = $this->db->prepare("UPDATE autores SET nombre=?, apellido=?, fecha=?, biografia=?, imagen=? WHERE id_autor=? ");
        $sentencia->execute(array($nombre, $apellido, $fecha, $biografia, $imagen, $id_autor));
    }

    function getAutor($id){
        $query = $this->db->prepare("SELECT * FROM autores WHERE id_autor = ?");
        $query->execute([$id]);
        $autor = $query->fetch(PDO::FETCH_OBJ);
        return json_decode(json_encode($autor), True);
    }

}
