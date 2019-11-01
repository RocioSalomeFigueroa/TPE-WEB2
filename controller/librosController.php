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
          header("Location: " . URL_autores);
         //  echo 'You are in! en checklogin' . session_status(); 
         return true;
        }

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
        $autor = $_POST['autor'];
        $genero = $_POST['genero'];
        $anio = $_POST['anio'];
        $valoracion = $_POST['valoracion'];
        $resenia = $_POST['resenia'];

        if(!empty($titulo) && !empty($autor)&& !empty($genero)){
            $this->model->agregar($titulo,$autor,$genero, $anio, $valoracion, $resenia);
            header("Location: " . BASE_URL);
        }
        else {
            $this->view->showError('completar campos obligatorios');
        }
    }

    function deleteLibro($id){
        if($this->checkLogIn()) {
           
            //   echo 'You are in!' . session_status();
    
            $this->model->eliminarLibro($id);
             header("Location: " . URL_libros); 
     } else {
            //    echo 'no entra al if';
            header("Location: " . URL_login);
                  exit;
          }       
    }

    function cambiarLibro($id){

        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $genero = $_POST['genero'];
        $anio = $_POST['año'];
        $valoracion = $_POST['valoracion'];
        $resenia = $_POST['resenia'];

        $this->model->changeLibro($titulo,$autor,$genero, $anio, $valoracion, $resenia);
        header("Location: " . URL_libros);
    }
    function showCategorias(){
        $Libros = $this->model->categorias();
        $this->view->mostrarCategorias($Libros);
    }
}