<?php
require_once('./libs/Smarty.class.php');

class autoresView{

    private $smarty;


    function __construct(){
        $this->smarty =new smarty();
        
    }

    function mostrarAutores($titulo, $autores){  //ni intente hacer el smarty con haberlo traido de l bbdd estoy
        
       // var_dump($autores);

       $this->smarty->assign('titulo', $titulo); //es assiGn, primero la g, sorry soy re boluda
       $this->smarty->assign('autores', $autores);

       $this->smarty->display('templates/autores.tpl');

    }

    function mostrarAutor($autor, $libros){
        $this->smarty->assign('autor', $autor);
    //    var_dump($libros);
        $this->smarty->assign('libros', $libros);

        $this->smarty->display('templates/autor.tpl');
    }

    function formAgregar($id=null){
            $this->smarty->display('templates/agregar.tpl');
    }

    function autoresVisit($autores){
        $this->smarty->assign('autores', $autores);
        $this->smarty->display('templates/autoresVisita.tpl');
    }

    function autorVisitante($autor, $libros){
        $this->smarty->assign('autor', $autor);
        $this->smarty->assign('libros', $libros);

        $this->smarty->display('templates/autorVisita.tpl');
    }
}