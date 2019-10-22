<?php
require_once './view/loginView.php';
require_once "./model/userModel.php";

class loginController(){

    private $view;
    private $model;
    private $titulo;

    function __construct(){
        $this->view = new librosView();
        $this->model = new librosModel();
        $this->titulo = "Login";
    }

    function login(){

        $this->view->mostrarLogin();
    }
}