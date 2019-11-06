<?php

class autoresModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_virtual;charset=utf8','root','');
    }

    function getAutores(){
        $sentencia = $this->db->prepare("select * from autores");
        $sentencia->execute();
        $autores = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        return $autores;
        
    }

    function agregarAutor($nombre, $apellido, $fecha, $biografia){//tengo que tereminar este
        
        $sentencia=$this->db->prepare('INSERT INTO autores (nombre, apellido, fecha, biografia) VALUES (?,?,?,?)');
        $sentencia->execute(array($nombre, $apellido, $fecha, $biografia));
        
        return $this->db->lastInsertId();
    }

    function eliminarAutor($id_autor){
        $sentencia = $this->db->prepare("DELETE FROM `autores` WHERE `id_autor` = ?");
        $sentencia->execute(array($id_autor));
    }

    function editarAutor($id_autor, $nombre, $apellido, $fecha, $biografia){
        $sentencia = $this->db->prepare("UPDATE autores SET nombre=?, apellido=?, fecha=?, biografia=? WHERE id_autor=? ");
        $sentencia->execute(array($nombre, $apellido, $fecha, $biografia, $id_autor));
    }

    function getAutor($id){
        $query = $this->db->prepare("SELECT * FROM autores WHERE id_autor = ?");
        $query->execute([$id]);
        $autor = $query->fetch(PDO::FETCH_OBJ);
        return json_decode(json_encode($autor), True);
    }

}
