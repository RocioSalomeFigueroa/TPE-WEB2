<?php
require_once('./view/librosView.php');
require_once("./model/librosModel.php");
require_once "./model/autoresModel.php";
require_once "./model/imagenesModel.php";

class librosController{
    
    private $view;
    private $model;
    private $imodel;

    function __construct(){
        $this->view = new librosView();
        $this->model = new librosModel();
        $this->amodel = new autoresModel();
        $this->imodel = new imagenesModel();
        $this->titulo = "Biblioteca Virtual";
    }

    public function checkLogIn(){
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
                "admin" => "null",
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
        $user = $this->getUser();
        $libros = $this->model->getLibros();
        $this->view->Mostrar($this->titulo,$libros, $user);
    }
    function traerLibro($id){
        $user = $this->getUser();
        $autores = $this->amodel->getAutores();
        $libro = $this->model->getLibro($id);
        $imagenes= $this->imodel->getImagenes($id);
        $this->view->MostrarLibro($libro, $autores, $user, $imagenes);

    }

    function agregarLibro(){
        $user = $this->getUser();
        if ($user['admin'] == 1) {
           // var_dump($user); die;
           $autores = $this->amodel->getAutores();
            $this->view->mostrarFormulario($autores, $user); # code...
        }
        else {
            header("Location: " . URL_login);
        }

        
    }
    function addLibro(){ //agrega a la base de datos
        $this->checkLogIn();

        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $genero = $_POST['genero'];
        $anio = $_POST['anio'];
        $valoracion = $_POST['valoracion'];
        $resenia = $_POST['resenia'];

        if(!empty($titulo) && !empty($autor)&& !empty($genero)){

             $rutaTempImagenes = $_FILES['imagen']['tmp_name'];
             if($this->sonJPG($_FILES['imagen']['type'])) {
                //$this->model->agregarLibro($titulo, $autor, $genero, $anio, $valoracion, $resenia, $rutaTempImagenes);
                $idLibro = $this->model->agregarLibro($titulo, $autor, $genero, $anio, $valoracion, $resenia);
                $this->imodel->agregarImagenes($rutaTempImagenes, $idLibro);
                header('Location: '.URL_libros);
              }
              else{

                $this->lview->showError('No es jpg ');
                //$this->lview->errorCrear("Las imagenes tienen que ser JPG.", $titulo, $autor, $genero, $anio, $valoracion, $resenia);
              }
        }
        else {
            $this->lview->showError('completar campos obligatorios');
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

    private function sonJPG($imagenesTipos){
        foreach ($imagenesTipos as $tipo) {
          if($tipo != 'image/jpeg') {
            return false;
          }
        }
        return true;
    }
    function deleteImagen($imagen){
        $this->checkLogIn();

        $this->imodel->eliminarImagen($imagen);
        header("Location: " . URL_libros); 
    }
}