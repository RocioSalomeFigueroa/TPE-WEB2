<?php
require_once('./libs/Smarty.class.php');

class librosView{

    private $smarty;

    function __construct(){
        $this->smarty =new smarty();
        
    }

    function Mostrar($titulo, $libros){ 
    //    echo count($Libros);
    //    var_dump($Libros);
         $this->smarty->assign('titulo', $titulo);
        $this->smarty->assign('Libros', $libros);

        $this->smarty->display('templates/libros.tpl');
    }

    function MostrarLibro($libro){


        $this->smarty->assign('libro', $libro);

        $this->smarty->display('templates/libro.tpl');
    }

    function mostrarFormulario($libros){

        $this->smarty->assign('libros', $libros);
        $this->smarty->display('templates/agregarLibro.tpl');
    }
}