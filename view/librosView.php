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

    function MostrarLibro($libro, $autores){
    
        $this->smarty->assign('autores', $autores);
        $this->smarty->assign('libro', $libro);

        $this->smarty->display('templates/libro.tpl');
    }

    function mostrarFormulario($autores){
      //  var_dump($autores);
        $this->smarty->assign('autores', $autores);
        $this->smarty->display('templates/agregarLibro.tpl');
    }

    function librosVisit($libros){
    //    var_dump($libros);
        $this->smarty->assign('libros', $libros);
        $this->smarty->display('templates/librosVisita.tpl');
    }
    function libroVisitante($libro){

        $this->smarty->assign('libro', $libro);

        $this->smarty->display('templates/libroVisita.tpl');
    }
}