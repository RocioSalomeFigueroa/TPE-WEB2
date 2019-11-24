<?php
require_once "./api/json.view.php";
require_once "./api/apiController.php";
require_once "./model/comentariosModel.php";

class biblioApiController extends ApiController{
    

    public function  getComentarios($params = null) {
        $id = $params[':ID'];
        
        $comentarios = $this->model->getComentarios($id);
        $this->view->response($comentarios, 200);
    }

    public function deleteComentario($params = null){
        $id = $params[':ID'];

        $comentarios = $this->model->deleteComentario($id);
    }

    public function agregarComentario($params = []){
        $comment = $this->getData(); // la obtengo del body
        
        // inserta la comment
        $commentId = $this->model->agregarComentario($comment->id_libro, $comment->id_usuario, $comment->valoracion, $comment->comentario);

       // var_dump($commentId); die;
        // obtengo la recien creada
        $commentNueva = $this->model->getComment($commentId);
        
        if ($commentNueva)
            $this->view->response($commentNueva, 200);
        else
            $this->view->response("Error al insertar comment", 500);;
    }

}