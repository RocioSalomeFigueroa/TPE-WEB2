<?php
require_once('./libs/Smarty.class.php');

class autoresView{

    private $smarty;


    function __construct(){
        $this->smarty =new smarty();
        
    }

    function MostrarAutores($titulo, $autores){  //ni intente hacer el smarty con haberlo traido de l bbdd estoy
        
       // var_dump($autores);

       $this->smarty->assign('titulo', $titulo); //es assiGn, primero la g, sorry soy re boluda
       $this->smarty->assign('autores', $autores);

       $this->smarty->display('templates/autores.tpl');

    }

    function MostrarAutor($Autor){
        $this->smarty->assign('Autor', $Autor);

       $this->smarty->display('templates/autor.tpl');
    }

    function formAgregar(){

        $this->smarty->display('templates/agregar.tpl');
    }
}