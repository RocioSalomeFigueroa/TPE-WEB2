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

    public function checkLogIn(){
        session_start();
        
        if(!isset($_SESSION['ID_USER'])){
            header("Location: " . URL_login);
            die();
        }

        if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 5000)) { 
            header("Location: " . URL_logout);
            die();
        } 
        $_SESSION['LAST_ACTIVITY'] = time();
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
        $anio = $_POST['anio'];
        $valoracion = $_POST['valoracion'];
        $resenia = $_POST['resenia'];

        if(!empty($titulo)&&!empty($autor)&&!empty($genero)){
            $this->model->agregar($titulo,$autor,$genero, $anio, $valoracion, $resenia);
            header("Location: " . BASE_URL);
        }
        else {
            $this->view->showError('completar campos obligatorios');
        }
    }

    function deleteLibro($id){
        $this->checkLogIn();
        $this->model->eliminarLibro($id);
        header("Location: " . BASE_URL);
    }

    function cambiarLibro($id){//tengo que terminar este

        $titulo = $_POST['titulo'];
        $autor = $_POST[''];//aca hay que ver si poner por id o el apellido/nombre
        $genero = $_POST['genero'];
        $anio = $_POST['año'];
        $valoracion = $_POST['valoracion'];
        $resenia = $_POST['resenia'];

        $this->model->changeLibro($titulo,$autor,$genero, $anio, $valoracion, $resenia);
        header("Location: " . BASE_URL);
    }
    function showCategorias(){
        $Libros = $this->model->categorias();
        $this->view->mostrarCategorias($Libros);
    }
}