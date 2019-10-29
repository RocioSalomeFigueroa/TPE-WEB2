<?php

class userModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_virtual;charset=utf8','root','');
    }

    public function GetPassword($user){
        $sentencia = $this->db->prepare( "SELECT * FROM usuarios WHERE email = ?");
        $sentencia->execute(array($user));
        
        $password = $sentencia->fetch(PDO::FETCH_OBJ);
        
        return $password;
    }

}