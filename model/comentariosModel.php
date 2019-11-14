<?php

class comentariosModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_virtual;charset=utf8','root','');
    }

    function agregarComentario($id_libro, $id_usuario, $valoracion, $comentario){
        $sentencia = $this->db->prepare('INSERT INTO comentarios (id_libro, id_usuario, valoracion, comentario) VALUE (:id_libro, :id_usuario, :valoracion, :comentario)');
        $sentencia->execute(['id_libro'=>$id_libro, 'id_usuario'=>$id_usuario, 'valoracion'=>$valoracion, 'comentario'=>$comentario]);
    }

    function getComentarios(){
        $sentencia = $this->db->prepare('SELECT * FROM comentarios');
        $sentencia->execute();
        $comentarios= $sentencia->fetchAll(PDO::FETCH_ASSOC);
        
        return $comentarios;
    }

}