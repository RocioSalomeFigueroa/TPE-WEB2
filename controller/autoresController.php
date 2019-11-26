<?php
require_once './view/autoresView.php';
require_once "./model/autoresModel.php";
require_once("./model/librosModel.php");

class autoresController{

        private $view;
        private $model;
        private $lmodel;
        private $titulo;

    function __construct(){
        $this->view = new autoresView();
        $this->model = new autoresModel();
        $this->lmodel = new librosModel();
        $this->titulo = "Biblioteca Virtual";
    }

    public function checkLogIn(){
        session_start();
        
        if(!isset($_SESSION['ID_USER'])){
            header("Location: " . URL_login);
            die();
        }
    }

    public function checkAdmin(){
        session_start();

        if(!isset($_SESSION['ID_USER']) || ($_SESSION['admin'] != 1) ){
            header("Location: " . URL_login);
            //var_dump($_SESSION);
            die();
        }
    }

    function getUser(){
        session_start();

        if(!isset($_SESSION['ID_USER'])){
            $user = [
                "id" => "null",
                "name" => "Visitante",
                "admin" => "0",
            ];
        }
        else{
            $user = [
                "id" => $_SESSION['ID_USER'],
                "name" => $_SESSION['USERNAME'],
                "admin" =>  $_SESSION['admin'],
            ];
        }

        return $user;
    }

    function autores(){
         $user = $this->getUser();
        $autores = $this->model->getAutores();
        $this->view->mostrarAutores($this->titulo,$autores,$user);
    }

    function traerAutor($id){

         $user = $this->getUser();        
        $autor = $this->model->getAutor($id);
        $libros =$this->lmodel->ordenar($id);
        $this->view->mostrarAutor($autor, $libros, $user);
    }

    function agregarAutor(){
        $user = $this->getUser();
        $this->view->formAgregar($user);
    }
    function addAutor(){
        $this->checkLogIn();

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha = $_POST['fecha'];
        $biografia = $_POST['biografia'];

        if(!empty($nombre)&&!empty($apellido)&&!empty($fecha)){
            $this->model->agregarAutor($nombre, $apellido, $fecha, $biografia);
            header("Location: " . URL_autores);
        }
    }

    function deleteAutor($id){
        $this->checkLogIn();

        $this->model->eliminarAutor($id);
        header("Location: " . URL_autores); 
        
    }

    function cambiarAutor($id){//edita
        $this->checkLogIn();

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha = $_POST['fecha'];
        $biografia = $_POST['biografia'];

        $this->model->editarAutor($id, $nombre, $apellido, $fecha, $biografia);
        header("Location: " . URL_autores);
    }

    function consulta(){
        $orden = $this->model->ordenar();
        $this->view->listaOrdenada($orden);
    }


}