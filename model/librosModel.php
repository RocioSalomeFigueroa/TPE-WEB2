<?php

class librosModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_virtual;charset=utf8','root','');
    }

    function getLibros(){
        $sentencia = $this->db->prepare("select * from libro");
        $sentencia->execute();
        $libros = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        return $libros;
        
    }
    function agregar($titulo,$autor,$genero){

        $sentencia=$this->db->prepare('INSERT INTO libro(titulo, autor, genero) values(???)');
        $sentencia->execute([$titulo, $autor, $genero]);
        
        return $this->db->lastInsertId();
    }

    function eliminarLibro($id){
        $sentencia = $this->db->prepare("DELETE FROM libro WHERE id=?");
        $sentencia->execute(array($id));
    }

    function changeLibro($id,$titulo,$autor,$genero, $anio, $valoracion, $resenia){//no termine todavia de hacer esta funcion 

        $sentencia = $this->db->prepare('UPDATE `libro` SET `titulo` = ?, `año` = ?, `genero` = ?, `reseña` = ?, `valoracion` = ? WHERE `libro`.`id_libro` = ? AND `libro`.`id_autor` = ?;');
        $sentencia->execute([$id,$titulo,$autor,$genero, $anio, $valoracion, $resenia]);

    }
    
}



