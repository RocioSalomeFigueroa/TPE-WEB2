<?php
require_once('./view/librosView.php');
require_once("./model/librosModel.php");
require_once "./model/autoresModel.php";

class librosController{
    
    private $view;
    private $model;

    function __construct(){
        $this->view = new librosView();
        $this->model = new librosModel();
        $this->amodel = new autoresModel();
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
            $user = $_SESSION['ID_USER'];
        }
        return $user;
    }

    function traerLibros(){
        $libros = $this->model->getLibros();
        $this->view->Mostrar($this->titulo,$libros);
    }
    function traerLibro($id){
        $user = getUser();
        $autores = $this->amodel->getAutores();
        $libro = $this->model->getLibro($id);
        $this->view->MostrarLibro($libro, $autores, $user);
    }

    function agregarLibro(){
        $this->checkAdmin();

        $autores = $this->amodel->getAutores();
        $this->view->mostrarFormulario($autores);
    }
    function addLibro(){         

        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $genero = $_POST['genero'];
        $anio = $_POST['anio'];
        $valoracion = $_POST['valoracion'];
        $resenia = $_POST['resenia'];

        if(!empty($titulo) && !empty($autor)&& !empty($genero)){

            $img = $_FILES["imagen"];
            $origen = $img["tmp_name"];
            $destino = "images/" . uniqid() . $img["name"];
            copy($origen, $destino);

            $this->model->agregarLibro($titulo,$autor,$genero, $anio, $valoracion, $resenia, $destino);
            header("Location: " . URL_libros);
        }
        else {
            $this->view->showError('completar campos obligatorios');
        }
    }

    function deleteLibro($id){
        $this->checkLogIn();

        $this->model->eliminarLibro($id);
        header("Location: " . URL_libros); 
      
    }

    function cambiarLibro($id){
        $this->checkLogIn();

        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $genero = $_POST['genero'];
        $anio = $_POST['anio'];
        $valoracion = $_POST['valoracion'];
        $resenia = $_POST['resenia'];

        $img = $_FILES["imagen"];
        $origen = $img["tmp_name"];
        $destino = "images/" . uniqid() . $img["name"];
            copy($origen, $destino);

        
        $this->model->editarLibro( $id, $titulo, $autor, $genero, $anio, $valoracion, $resenia, $destino);
        header("Location: " . URL_libros);
    }