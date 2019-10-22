<?php
require_once('./libs/Smarty.class.php');

class loginView{

    private $smarty;


    function __construct(){
        $this->smarty =new smarty();
        
    }

    function mostrarLogin(){
       // var_dump();

     
        $this->smarty->assign('titulo', 'login'); //es assiGn, primero la g, sorry soy re boluda
        

        $this->smarty->display('templates/login.tpl');

    }
}