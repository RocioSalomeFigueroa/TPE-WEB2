<?php
require_once('./libs/Smarty.class.php');

class librosView{

    private $smarty;


    function __construct(){
        $this->smarty =new smarty();
        
    }

    function Mostrar($titulo, $Libros){
        var_dump($Libros);

/*      
        $this->smarty->assing('titulo', $titulo);
        $this->smarty->assing('Libros', $Libros);

        $this->smarty->display('templates/libros.tpl'); */

    }
}