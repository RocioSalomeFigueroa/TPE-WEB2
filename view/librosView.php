<?php
require_once('./libs/Smarty.class.php');

class librosView{

    private $smarty;


    function __construct(){
      //  $this->smarty =new smarty();
        
    }

    function Mostrar($titulo, $Libros){
        $this->smarty =new smarty();

        $this->smarty->assing('titulo', $titulo);
        $this->smarty->assing('libros', $Libros);

        $this->smarty->display('template/libros.tpl');

    }
}