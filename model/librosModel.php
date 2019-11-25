<?php

class librosModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca_virtual;charset=utf8','root','');
    }

    function getLibros(){
        $sentencia = $this->db->prepare("SELECT lib.id_libro, lib.titulo, aut.apellido, aut.nombre, lib.genero, lib.valoracion FROM libros lib INNER JOIN autores aut ON lib.id_autor = aut.id_autor");
        $sentencia->execute();
        $libros = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        return $libros;  
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

    function agregarLibro($titulo,$autor,$genero, $anio, $valoracion, $resenia, $imagenes){
        $sentencia=$this->db->prepare("INSERT INTO libros(titulo, id_autor, genero, anio, valoracion, resenia) 
        VALUES(?,?,?,?,?,?)");
        $sentencia->execute([$titulo,$autor,$genero, $anio, $valoracion, $resenia]);
        $id_libro=$this->db->lastInsertId();
        $rutas = $this->subirImagenes($imagenes);
        $sentencia_imagenes = $this->db->prepare('INSERT INTO imagenes(id_libro,ruta) VALUES(?,?)');
        foreach ($rutas as $ruta) {
         $sentencia_imagenes->execute([$id_libro,$ruta]);
    }
  }

    function eliminarLibro($id){
        $sentencia = $this->db->prepare("DELETE FROM `libros` WHERE `libros`.`id_libro` = ?");
        $sentencia->execute(array($id));
    }

    
    function eliminarImagen($id){
        $sentencia = $this->db->prepare("DELETE FROM 'imagenes' WHERE 'imagen'=?");
        $sentencia->execute([$id]);
    }
    
    function editarLibro($id,$titulo,$autor,$genero, $anio, $valoracion, $resenia,$imagen){
        $sentencia = $this->db->prepare("UPDATE libros SET titulo=?, id_autor=?, genero=?, anio=?, valoracion=?, resenia=?, imagen=? WHERE id_libro=?");
        $sentencia->execute(array($titulo,$autor,$genero, $anio, $valoracion, $resenia,$imagen,$id));
       // var_dump($id); die;

    }
    function getLibro($id){
        $libroImagenes = [];
        $query = $this->db->prepare('SELECT lib.id_libro, lib.titulo, aut.apellido, aut.nombre, lib.genero, lib.anio, lib.resenia, lib.valoracion FROM libros lib INNER JOIN autores aut ON lib.id_autor = aut.id_autor WHERE id_libro = ?');
        $query->execute([$id]);
        $libro = $query->fetch(PDO::FETCH_ASSOC);
        $sentencia_imagenes = $this->db->prepare( "SELECT * FROM imagenes WHERE id_libro=?");
        $sentencia_imagenes->execute([$libro['id_libro']]);
        $imagenes = $sentencia_imagenes->fetchAll(PDO::FETCH_ASSOC);
            //imagenes tiene [[id_imagen, ruta],[id_imagen, ruta], [id_imagen, ruta]]
        $libro['imagenes'] = $imagenes;
            //tarea va a agregar la key 'imagenes', entonces tiene
            //tiene id_tarea, titulo, descripcion, completado, imagenes(arreglo)
            
          return $libro;
        }

    function ordenar($id){
        $sentencia = $this->db->prepare("SELECT * FROM libros WHERE id_autor = ?");
        $sentencia->execute(array($id));
        $orden = $sentencia->fetchAll(PDO::FETCH_ASSOC);

        return $orden;
    }
}



