<?php
include_once('models/libro.model.php');
include_once('views/libro.view.php');
include_once('helpers/auth.helper.php');

class LibroController {

    private $model;
    private $view;

    //aca cambia tarea por libro y son los mismos comentarios jjaja

    public function __construct() {

        // barrera para usuario logueado
    //    $authHelper = new AuthHelper();
    //    $authHelper->checkLoggedIn();

        $this->model = new LibroModel();
        $this->view = new LibroView();
    }

    /**
     * Muestra la lista de tareas.
     */
    public function showLibro() {

        // obtengo tareas del model
        $libros = $this->model->getAll();

        // se las paso a la vista
        $this->view->showLibros($libros);
    }

        //para mi estas dos funciones se tendrian que llamar igual, pero da error
    public function showLibroId($params = null) {
        $idLibro = $params[':ID'];
        $libro = $this->model->get($idLibro);

        if ($libro) // si existe la tarea
            $this->view->showLibro($libro);
        else
            $this->view->showError('El libro no existe');
    }

}    

