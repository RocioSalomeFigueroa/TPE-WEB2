<?php

class comentariosModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_virtual;charset=utf8','root','');
    }

    function agregarComentario($id_libro, $id_usuario, $valoracion, $comentario){
        $sentencia = $this->db->prepare('INSERT INTO comentarios (id_libro, id_usuario, valoracion, comentario) VALUE (:id_libro, :id_usuario, :valoracion, :comentario)');
        $sentencia->execute(['id_libro'=>$id_libro, 'id_usuario'=>$id_usuario, 'valoracion'=>$valoracion, 'comentario'=>$comentario]);
       
        return $this->db->lastInsertId();
    }

    function getComentarios($id){
        $sentencia = $this->db->prepare('SELECT * FROM comentarios WHERE id_libro=?');
        $sentencia->execute([$id]);
        $comentarios= $sentencia->fetchAll(PDO::FETCH_ASSOC);
        
        return $comentarios;
    }

    function deleteComentario($id){
        $sentencia = $this->db->prepare("DELETE FROM `comentarios` WHERE `comentarios`.`id_comentario` = ?");
        $sentencia->execute(array($id));
    }
    function getComment($id){
        $sentencia = $this->db->prepare('SELECT * FROM comentarios WHERE id_comentario=?');
        $sentencia->execute([$id]);
        $comentario= $sentencia->fetch(PDO::FETCH_OBJ);
        
        return $comentario;
    }

}