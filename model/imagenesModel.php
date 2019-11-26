<?php

class imagenesModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_virtual;charset=utf8','root','');
    }

    function subirImagenes($imagenes){
        $rutas = [];
        foreach ($imagenes as $imagen) {
        $destino_final = 'images/libros/' . uniqid() . '.jpg';
        move_uploaded_file($imagen, $destino_final);
        $rutas[]=$destino_final;
        }
        return $rutas;
    }

    function agregarImagenes($imagenes){
        $rutas = $this->subirImagenes($imagenes);
        $sentencia_imagenes = $this->db->prepare('INSERT INTO imagenes(id_libro,ruta) VALUES(?,?)');
        foreach ($rutas as $ruta) {
            $sentencia_imagenes->execute([$id_libro,$ruta]);
    }
}

    function eliminarImagen($imagen){
        $sentencia_imagenes=$this->db->prepare('DELETE FROM `imagenes` WHERE `imagenes`.`id_imagen` = ?');
        $sentencia_imagenes->execute([$imagen]);
    }
}