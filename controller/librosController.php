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
        $libros = $this->model->getLibros();
        $this->view->Mostrar($this->titulo,$libros);
    }
    function traerLibro($id){
        
        $libro = $this->model->getLibro($id);
        $this->view->MostrarLibro($libro);
    }

    function agregarLibro(){ //si unificamos los controller lo tendria que traer con el id de autor
        $libros = $this->model->getLibros();
        $this->view->mostrarFormulario($libros);
    }
    function addLibro(){
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $genero = $_POST['genero'];
        $anio = $_POST['anio'];
        $valoracion = $_POST['valoracion'];
        $resenia = $_POST['resenia'];

        if(!empty($titulo) && !empty($autor)&& !empty($genero)){
            $this->model->agregarLibro($titulo,$autor,$genero, $anio, $valoracion, $resenia);
            header("Location: " . URL_libros);
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
        $this->model->editarLibro($_POST['titulo'],$_POST['autor'],$_POST['genero'],$_POST['anio'],$_POST['valoracion'],$_POST['resenia'], $id);
        header("Location: " . URL_libros);
    }

    function showCategorias(){
        $Libros = $this->model->categorias();
        $this->view->mostrarCategorias($Libros);
    }
}