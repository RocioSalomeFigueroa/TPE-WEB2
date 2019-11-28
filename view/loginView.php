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
        $this->smarty->display('templates/index.tpl');
    }
    function homeView($error = null){
        $this->smarty->assign('titulo', 'Iniciar Sesión');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/index.tpl');
    }

    function registro($user,$error = null){
        $this->smarty->assign('user', $user);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/registro.tpl');
    }

    function mostrarUsuarios($usuarios, $user){
        $this->smarty->assign('user', $user);
        $this->smarty->assign('usuarios', $usuarios);

        $this->smarty->display('templates/usuarios.tpl');
    }
}
