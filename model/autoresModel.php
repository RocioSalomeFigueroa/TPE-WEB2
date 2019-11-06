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

    function eliminarAutor($id){
        $sentencia = $this->db->prepare("DELETE FROM `autores` WHERE `id_autor` = ?");
        $sentencia->execute(array($id));
    }

    function editarAutor($nombre, $apellido, $fecha, $biografia, $id){
        $sentencia = $this->db->prepare("UPDATE autores SET nombre=?, apellido=?, fecha=?, biografia=? WHERE id_autor=? ");
        $sentencia->execute(array($nombre, $apellido, $fecha, $biografia, $id));

    }
    function getAutor($id){
        $query = $this->db->prepare("SELECT * FROM autores WHERE id_Autor = ?");
        $query->execute([$id]);
        $Autor = $query->fetch(PDO::FETCH_OBJ);
        return json_decode(json_encode($Autor), True);
    }

}
