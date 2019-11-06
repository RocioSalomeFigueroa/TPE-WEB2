<?php
require_once('./view/librosView.php');
require_once("./model/librosModel.php");
require_once './view/autoresView.php';
require_once "./model/autoresModel.php";

class librosController{
    
    private $lview;
    private $lmodel;
    private $aview;
    private $amodel;
    private $titulo;

    function __construct(){
        $this->lview = new librosView();
        $this->lmodel = new librosModel();
        $this->aview = new autoresView();
        $this->amodel = new autoresModel();
        $this->titulo = "Biblioteca Virtual";
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
        $libros = $this->lmodel->getLibros();
        $this->lview->Mostrar($this->titulo,$libros);
    }
    function traerLibro($id){
        
        $libro = $this->lmodel->getLibro($id);
        $this->lview->MostrarLibro($libro);
    }

    function agregarLibro(){ //si unificamos los controller lo tendria que traer con el id de autor
        $autores = $this->amodel->getAutores();
        $this->lview->mostrarFormulario($autores);
    }
    function addLibro(){
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $genero = $_POST['genero'];
        $anio = $_POST['anio'];
        $valoracion = $_POST['valoracion'];
        $resenia = $_POST['resenia'];

        if(!empty($titulo) && !empty($autor)&& !empty($genero)){
            $this->lmodel->agregarLibro($titulo,$autor,$genero, $anio, $valoracion, $resenia);
            header("Location: " . URL_libros);
        }
        else {
            $this->lview->showError('completar campos obligatorios');
        }
    }

    function deleteLibro($id){
        if($this->checkLogIn()) {
            //   echo 'You are in!' . session_status();
            $this->lmodel->eliminarLibro($id);
             header("Location: " . URL_libros); 
     } else {
            //    echo 'no entra al if';
            header("Location: " . URL_login);
                  exit;
          }       
    }

    function cambiarLibro($id){
        $this->lmodel->editarLibro($_POST['titulo'],$_POST['autor'],$_POST['genero'],$_POST['anio'],$_POST['valoracion'],$_POST['resenia'], $id);
        header("Location: " . URL_libros);
    }

    function autores(){
        $autores = $this->amodel->getAutores();
        $this->aview->MostrarAutores($this->titulo,$autores);
    }

    function traerAutor($id){
        $autor = $this->amodel->getAutor($id);
        $this->aview->MostrarAutor($autor);
    }

    function agregarAutor(){
        $this->aview->formAgregar();
    }
    function addAutor(){
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
        if($this->checkLogIn()) {
           
        //   echo 'You are in!' . session_status();

            $this->amodel->eliminarAutor($id);
            header("Location: " . URL_autores); 
          } else {
        //    echo 'no entra al if';
        header("Location: " . URL_login);
              exit;
          }
    }

    function cambiarAutor($id){//tengo que terminar este

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha = $_POST['fecha'];
        $biografia = $_POST['biografia'];

        $this->amodel->editarAutor($id, $nombre, $apellido, $fecha, $biografia);
        header("Location: " . BASE_URL);
    }
}