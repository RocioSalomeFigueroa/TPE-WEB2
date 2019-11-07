<?php
require_once('./libs/Smarty.class.php');

class loginView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    public function showLogin($error = null){
        
        $this->smarty->assign('titulo', 'Iniciar Sesión');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
    }
    function homeView($error = null){
        $this->smarty->assign('titulo', 'Iniciar Sesión');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/index.tpl');
    }

    function registro($error = null){//consultar el error null
        
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/registro.tpl');
    }
}
