<?php
require_once('./view/librosView.php');
require_once("./model/librosModel.php");
require_once './view/autoresView.php';
require_once "./model/autoresModel.php";

class bibliotecaController{
    
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
            header("Location: " . URL_login);
            die();
        }

    }

    function traerLibros(){
        $libros = $this->lmodel->getLibros();
        $this->lview->Mostrar($this->titulo,$libros);
    }
    function traerLibro($id){
        $autores = $this->amodel->getAutores();
        $libro = $this->lmodel->getLibro($id);
        $this->lview->MostrarLibro($libro, $autores);
    }

    private function sonJPG($imagenesTipos){
        foreach ($imagenesTipos as $tipo) {
          if($tipo != 'image/jpeg') {
            return false;
          }
        }
        return true;
    }

    function agregarLibro(){ //muestra el formulario
        $autores = $this->amodel->getAutores();
        $this->lview->mostrarFormulario($autores);
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
                $this->lmodel->agregarLibro($titulo, $autor, $genero, $anio, $valoracion, $resenia, $rutaTempImagenes);
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

        $this->lmodel->eliminarLibro($id);
        header("Location: " . URL_libros); 
      
    }

    function deleteImagen($id){
        $this->checkLogIn();

        $this->lmodel->eliminarImagen($id);
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
        $destino = "images/libros/" . uniqid() . $img["name"];
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

            $img = $_FILES["imagen"];
            $origen = $img["tmp_name"];
            $destino = "images/autor/" . uniqid() . $img["name"];
            copy($origen, $destino);
            $this->amodel->agregarAutor($nombre, $apellido, $fecha, $biografia, $destino);
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

        $img = $_FILES["imagen"];
        $origen = $img["tmp_name"];
        $destino = "images/autor/" . uniqid() . $img["name"];
            copy($origen, $destino);

        $this->amodel->editarAutor($id, $nombre, $apellido, $fecha, $biografia, $destino);
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