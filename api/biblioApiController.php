<?php
require_once "./model/autoresModel.php";
require_once "./model/librosModel.php";
require_once "./api/json.view.php";

class biblioApiController{
    private $model;
    private $lmodel;
    private $view;

    private $data;

    public function __construct() {
        $this->model = new autoresModel();
        $this->lmodel = new librosModel();
        $this->view = new JSONView();
        $this->data = file_get_contents("php://input");
    }

    private function getData() {
        return json_decode($this->data);
    }

    public function  getAutores($params = null) {
        $autores = $this->model->getAutores();
        $this->view->response($autores, 200);
    }

    public function  getLibros($params = null) {
        $libros = $this->lmodel->getLibros();
        $this->view->response($libros, 200);
    }



}