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

}
