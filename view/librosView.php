<?php
require_once('./libs/Smarty.class.php');

class librosView{

    private $smarty;

    function __construct(){
        $this->smarty =new smarty();
        
    }

    function Mostrar($titulo, $Libros){
       // var_dump($Libros);

     
        $this->smarty->assign('titulo', $titulo); //es assiGn, primero la g, sorry soy re boluda
        $this->smarty->assign('Libros', $Libros);

        $this->smarty->display('templates/libros.tpl');

    }
}