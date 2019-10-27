<?php
require_once('./view/librosView.php');
require_once("./model/librosModel.php") ;

class librosController{
    
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
    function traerLibros(){
        $Libros = $this->model->getLibros();
        $this->view->Mostrar($this->titulo,$Libros);
    }
    function traerLibro($id){
        
        $Libro = $this->model->getLibro($id);
        $this->view->MostrarLibro($Libro);
    }
    function addLibro(){
        $titulo = $_POST['titulo'];
        $autor = $_POST[''];//aca hay que ver si poner por id o el apellido/nombre
        $genero = $_POST['genero'];
        $anio = $_POST['año'];
        $valoracion = $_POST['valoracion'];
        $resenia = $_POST['resenia'];

        if(!empty($titulo)&&!empty($autor)&&!empty($genero)){
            $this->model->agregar($titulo,$autor,$genero, $anio, $valoracion, $resenia);
            header("location: " . VER);
        }
        else {
            $this->view->showError('completar campos obligatorios');
        }
    }

    function deleteLibro($id){
        $this->model->eliminarLibro($id);
        header("Location: " . VER);
    }

    function cambiarLibro($id){//tengo que terminar este

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