<?php
require_once './view/librosView.php';
require_once "./model/librosModel.php";

class librosController{
    
    private $view;
    private $model;
    private $titulo;

    function __construct(){
        $this->view = new librosView();
        $this->model = new librosModel();
        $this->titulo = "Lista de libros";
    }

    function Home(){
        $Libros = $this->model->getLibros();
        $this->view->Mostrar($this->titulo,$Libros);
    }
}