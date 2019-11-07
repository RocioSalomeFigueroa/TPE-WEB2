<?php

class userModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_virtual;charset=utf8','root','');
    }

    public function GetPassword($user){
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE id_usuario = ?');
        $query->execute([$user]);

        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function addUsuario($user, $hash, $nombre, $fecha, $mail){
        $sentencia = $this->db->prepare("INSERT INTO usuarios(id_usuario, password, nombre, fecha, mail) VALUES (?,?,?,?,?)");
        $sentencia->execute(array($user, $hash, $nombre, $fecha, $mail));


        return $this->db->lastInsertId();

    }



}