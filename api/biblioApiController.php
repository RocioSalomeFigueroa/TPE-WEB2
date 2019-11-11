<?php
require_once "./model/autoresModel.php";
require_once "./api/json.view.php";

class biblioApiController{
    private $model;
    private $view;

    private $data;

    public function __construct() {
        $this->model = new autoresModel();
        $this->view = new JSONView();
        $this->data = file_get_contents("php://input");
    }

    private function getData() {
        return json_decode($this->data);
    }

    public function  getAutores($params = null) {
        $tareas = $this->model->getAutores();
        $this->view->response($tareas, 200);
    }


}