<?php
require_once('./libs/Smarty.class.php');

class librosView{

    private $smarty;

    function __construct(){
        $this->smarty =new smarty();
        
    }

    function Mostrar($titulo, $Libros){ 
    //    echo count($Libros);
    //    var_dump($Libros);
         $this->smarty->assign('titulo', $titulo);
        $this->smarty->assign('Libros', $Libros);

        $this->smarty->display('templates/libros.tpl');
    }

    function MostrarLibro($libro){


        $this->smarty->assign('Libro', $libro);

        $this->smarty->display('templates/libro.tpl');
    }
}