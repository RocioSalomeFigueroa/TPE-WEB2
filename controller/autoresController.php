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
        $this->titulo = "Lista de autores";
    }

    function Autores(){
        $autores = $this->model->getAutores();
        $this->view->MostrarAutores($this->titulo,$autores);
    }
}