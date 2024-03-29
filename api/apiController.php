<?php

abstract class ApiController {
    protected $model;
    protected $view;
    private $data; 

    public function __construct() {
        $this->model = new comentariosModel();
        $this->view = new JSONView();
        $this->data = file_get_contents("php://input");
    }

    function getData(){ 
        return json_decode($this->data); 
    }  

}
