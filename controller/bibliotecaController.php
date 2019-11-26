<?php
require_once('./view/librosView.php');
require_once("./model/librosModel.php");
require_once './view/autoresView.php';
require_once "./model/autoresModel.php";
require_once "./model/userModel.php";

class bibliotecaController{
    
    private $lview;
    private $lmodel;
    private $aview;
    private $amodel;
    private $umodel;
    private $titulo;

    function __construct(){
        $this->lview = new librosView();
        $this->lmodel = new librosModel();
        $this->aview = new autoresView();
        $this->amodel = new autoresModel();
        $this->umodel = new userModel();
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

    function traerLibros(){
        $libros = $this->lmodel->getLibros();
        $this->lview->Mostrar($this->titulo,$libros);
    }
    function traerLibro($id){
        $user = $this->getUser();
       // var_dump($user); die;
        $autores = $this->amodel->getAutores();
        $libro = $this->lmodel->getLibro($id);
        $this->lview->MostrarLibro($libro, $autores, $user);
    }

    function agregarLibro(){
        $this->checkAdmin();

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

            $img = $_FILES["imagen"];
            $origen = $img["tmp_name"];
            $destino = "images/" . uniqid() . $img["name"];
            copy($origen, $destino);

            $this->lmodel->agregarLibro($titulo,$autor,$genero, $anio, $valoracion, $resenia, $destino);
            header("Location: " . URL_libros);
        }
        else {
            $this->lview->showError('completar campos obligatorios');
        }
    }

    function deleteLibro($id){
        $this->checkLogIn();

        $this->lmodel->eliminarLibro($id);
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

        
        $this->lmodel->editarLibro( $id, $titulo, $autor, $genero, $anio, $valoracion, $resenia, $destino);
        header("Location: " . URL_libros);
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

    function visitantesAutores(){
        $autores = $this->amodel->getAutores();
        $this->aview->autoresVisit($autores);
    }

    function visitantesLibros(){
        $libros = $this->lmodel->getLibros();
        $this->lview->librosVisit($libros);
    }

    function traerLibroVisitante($id){
        
        $libro = $this->lmodel->getLibro($id);
        $this->lview->libroVisitante($libro);
    }

    function traerAutorVisitante($id){
        $autor = $this->amodel->getAutor($id);
        $libros =$this->lmodel->ordenar($id);
        $this->aview->autorVisitante($autor, $libros);
    }
}