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

        if(!isset($_SESSION['ID_USER']) || ($_SESSION['admin'] != 1) ){
            header("Location: " . URL_login);
            //var_dump($_SESSION);
            die();
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
        $autores = $this->amodel->getAutores();
        $this->aview->mostrarAutores($this->titulo,$autores);
    }

    function traerAutor($id){
        
        $autor = $this->amodel->getAutor($id);
        $libros =$this->lmodel->ordenar($id);
        $this->aview->mostrarAutor($autor, $libros);
    }

    function agregarAutor(){
        $this->aview->formAgregar();
    }
    function addAutor(){
        $this->checkLogIn();

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha = $_POST['fecha'];
        $biografia = $_POST['biografia'];

        if(!empty($nombre)&&!empty($apellido)&&!empty($fecha)){
            $this->amodel->agregarAutor($nombre, $apellido, $fecha, $biografia);
            header("Location: " . URL_autores);
        }
    }

    function deleteAutor($id){
        $this->checkLogIn();

        $this->amodel->eliminarAutor($id);
        header("Location: " . URL_autores); 
        
    }

    function cambiarAutor($id){//edita
        $this->checkLogIn();

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha = $_POST['fecha'];
        $biografia = $_POST['biografia'];

        $this->amodel->editarAutor($id, $nombre, $apellido, $fecha, $biografia);
        header("Location: " . URL_autores);
    }

    function consulta(){
        $orden = $this->amodel->ordenar();
        $this->aview->listaOrdenada($orden);
    }


}