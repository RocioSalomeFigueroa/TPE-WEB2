<?php
require_once('./libs/Smarty.class.php');

class autoresView{

    private $smarty;


    function __construct(){
        $this->smarty =new smarty();
        
    }

    function mostrarAutores($titulo, $autores,$user){  //ni intente hacer el smarty con haberlo traido de l bbdd estoy
        
       // var_dump($autores);

       $this->smarty->assign('titulo', $titulo); //es assiGn, primero la g, sorry soy re boluda
       $this->smarty->assign('autores', $autores);
       $this->smarty->assign('user', $user);

       $this->smarty->display('templates/autores.tpl');

    }

    function mostrarAutor($autor, $libros, $user){
        $this->smarty->assign('autor', $autor);
    //    var_dump($libros);
        $this->smarty->assign('libros', $libros);
        $this->smarty->assign('user', $user);

        $this->smarty->display('templates/autor.tpl');
    }

    function formAgregar($user){
        $this->smarty->assign('user', $user);

        $this->smarty->display('templates/agregar.tpl');
    }

    function autoresVisit($autores, $user){
        $this->smarty->assign('autores', $autores);
        $this->smarty->assign('user', $user);
        $this->smarty->display('templates/autoresVisita.tpl');
    }

    function autorVisitante($autor, $libros, $user){
        $this->smarty->assign('autor', $autor);
        $this->smarty->assign('libros', $libros);
        $this->smarty->assign('user', $user);

        $this->smarty->display('templates/autorVisita.tpl');
    }
}