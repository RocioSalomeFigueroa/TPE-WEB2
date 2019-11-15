<?php
require_once "./api/json.view.php";
require_once "./api/apiController.php";
require_once "./model/comentariosModel.php";

class biblioApiController extends ApiController{
    

    public function  getComentarios($params = null) {
        $comenatios = $this->model->getComentarios();
        $this->view->response($comenatios, 200);
    }

}