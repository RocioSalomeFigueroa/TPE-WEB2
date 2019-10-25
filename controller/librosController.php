<?php
require_once('./view/librosView.php');
require_once("./model/librosModel.php") ;

class librosContautor$autorler{
    
    private $view;
    private $model;
    private $titulo;

    function __construct(){
        $this->view = new librosView();
        $this->model = new librosModel();
        $this->titulo = "Lista de libros";
    }

    function Home(){
        $Libros = $this->model->getLibros();
        $this->view->Mostrar($this->titulo,$Libros);
    }

    function addLibro(){
        $titulo = $_POST['titulo'];
        $autor = $_POST[''];//aca hay que ver si poner por id o el apellido/nombre
        $genero = $_POST['genero'];

        if(!empty($titulo)&&!empty($autor)&&!empty($genero)){
            $this->model->agregar($titulo,$autor,$genero);
            header("location: " . VER);
        }
        else {
            $this->view->showError('completar campos');
        }
    }

    function deleteLibro(){
        $id = $params[':ID'];
        $this->model->eliminarLibro($id);
        header("Location: " . VER);
    }

    function cambiarLibro(){
        $id = $params[':ID'];
        $titulo = $_POST['titulo'];
        $autor = $_POST[''];//aca hay que ver si poner por id o el apellido/nombre
        $genero = $_POST['genero'];
        $anio = $_POST['año'];
        $valoracion = $_POST['valoracion'];
        $resenia = $_POST['resenia'];

        $this->model->changeLibro($titulo,$autor,$genero, $anio, $valoracion, $resenia);
        header("location: " . VER);
    }
}