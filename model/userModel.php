<?php

class userModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_virtual;charset=utf8','root','');
    }

    public function GetPassword($user){
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE username = ?');
        $query->execute([$user]);

        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function addUsuario($user, $pass, $nombre, $fecha, $mail){
        $sentencia = $this->db->prepare("INSERT INTO usuarios (username, pass, nombre, fecha_nac, mail, admin) VALUES (?,?,?,?,?,0)");
        $sentencia->execute(array($user, $pass, $nombre, $fecha, $mail));
        //var_dump($user, $pass, $nombre, $fecha, $mail); die;


        return $this->db->lastInsertId();
    }

    public function getUsuarios(){
        $query = $this->db->prepare('SELECT * FROM  usuarios');
        $query->execute();
        $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

        return $usuarios;
    }

    function cambiarAdmin($administrador, $user){
        $sentencia = $this->db->prepare("UPDATE `usuarios` SET `admin` = ? WHERE `usuarios`.`id_usuario` = ?");
        $sentencia->execute(array($administrador,$user));
    }



}