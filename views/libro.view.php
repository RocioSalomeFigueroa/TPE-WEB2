<?php
require_once('libs/Smarty.class.php');

class LibroView {

    private $smarty;

    public function __construct() {
    //    $authHelper = new AuthHelper();
    //    $userName = $authHelper->getLoggedUserName();
        
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
    //    $this->smarty->assign('userName', $userName);
    }

    public function showLibros($libros){
        $this->smarty->assign('titulo', 'Lista de libros');
        $this->smarty->assign('libros', $libros);

        $this->smarty->display('templates/libro.tpl');

    }

    public function showError($msgError) {
        echo "<h1>ERROR!</h1>";
        echo "<h2>{$msgError}</h2>";
    }

    /**
     * Construye el html que permite visualizar el detalle de una tarea determinada.
     */
    /* public function showLibro($libro) {
        $this->smarty->assign('titulo', 'Detalle de Tarea');
        $this->smarty->assign('tarea', $libro);

        $this->smarty->display('templates/LibroDetail.tpl');
    } */
}

