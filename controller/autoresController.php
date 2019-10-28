<?php
require_once './view/autoresView.php';
require_once "./model/autoresModel.php";

class autoresController{
    
    private $view;
    private $model;
    private $titulo;

    function __construct(){
        $this->view = new autoresView();
        $this->model = new autoresModel();
        $this->titulo = "Lista de autores";
    }

    function Autores(){
        $autores = $this->model->getAutores();
        $this->view->MostrarAutores($this->titulo,$autores);
    }

    function traerAutor($id){
        $Autor = $this->model->getAutor($id);
        $this->view->MostrarAutor($Autor);
    }
    function addAutor(){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha = $_POST['fecha'];
        $biografia = $_POST['biografia'];

        if(!empty($nombre)&&!empty($apellido)&&!empty($fecha)){
            $this->model->agregarAutor($nombre, $apellido, $fecha, $biografia);
            header("Location: " . BASE_URL);
        }
        else {
            $this->view->showError('completar campos obligatorios');
        }
    }

    function deleteAutor($id){
        $this->model->eliminarAutor($id);
        header("Location: " . BASE_URL);
    }

    function cambiarAutor($id){//tengo que terminar este

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha = $_POST['fecha'];
        $biografia = $_POST['biografia'];

        $this->model->changeAutor($nombre, $apellido, $fecha, $biografia);
        header("Location: " . BASE_URL);
    }
}