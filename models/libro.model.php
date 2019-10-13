<?php

class LibroModel {

    private $db;

    public function __construct() {

       $this->db = new PDO('mysql:host=localhost;dbname=bibiblioteca_virtual', 'root', '');
    }

/**
     * Obtiene la lista de tareas dejando en primer lugar las que no fueron finalizadas.
     */
    public function getAll() {
        $query = $this->db->prepare('SELECT * FROM libro ORDER BY id ASC');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    /**
     * Retorna todas las tareas de acuerdo a la prioridad y si está finalizada o no.
     */
    public function getLibros($valoracion, $id_libro) {
        $query = $this->db->prepare("SELECT * FROM libro WHERE valoracion = ? AND id_libro = ?");
        $query->execute(array($valoracion, $id_libro));
        return $query->fetchAll();
    }

    /**
     * Retorna una tarea según el id pasado.
     */
    public function get($idLibro) {
        $query = $this->db->prepare('SELECT * FROM libro WHERE id_Libro = ?');
        $query->execute(array($idLibro));

        return $query->fetch(PDO::FETCH_OBJ);
    }


/*      Guarda una tarea en la base de datos.
    
    public function save($titulo, $descripcion, $prioridad) {
        $query = $this->db->prepare('INSERT INTO tareas(titulo, descripcion, prioridad, finalizada) VALUES(?,?,?,0)');
        $query->execute([$titulo, $descripcion, $prioridad]); 
    }

    
    Elimina una tarea de la BBDD según el id pasado.
    
    function delete($idTarea) {
        $query = $this->db->prepare('DELETE FROM tareas WHERE id_tarea = ?');
        $query->execute([$idTarea]); 
    }

    
     Actualiza la tarea y la marca finalizada.
    
    function end($idTarea) {
        $query = $this->db->prepare('UPDATE tareas SET finalizada = 1 WHERE id_tarea = ?');
        $query->execute([$idTarea]);
    } */

}
