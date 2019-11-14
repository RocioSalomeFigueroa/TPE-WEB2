<?php
require_once "./api/json.view.php";
require_once "./model/comentariosModel.php";

class biblioApiController{
    private $model;
    private $view;

    private $data;

    public function __construct() {
        $this->model = new comentariosModel();
        $this->view = new JSONView();
        $this->data = file_get_contents("php://input");
    }

    private function getData() {
        return json_decode($this->data);
    }

    public function  getComentarios($params = null) {
        $comenatios = $this->model->getComentarios();
        $this->view->response($comenatios, 200);
    }

}