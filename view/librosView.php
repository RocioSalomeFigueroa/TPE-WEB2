<?php
require_once('./libs/Smarty.class.php');

class librosView{

    private $smarty;

    function __construct(){
        $this->smarty =new smarty();
        
    }

    function Mostrar($titulo, $libros,$user){ 
        $this->smarty->assign('titulo', $titulo);
        $this->smarty->assign('Libros', $libros);
        $this->smarty->assign('user', $user);

        $this->smarty->display('templates/libros.tpl');
    }

    function MostrarLibro($libro, $autores, $user){
    
        $this->smarty->assign('autores', $autores);
        $this->smarty->assign('libro', $libro);
        $this->smarty->assign('user', $user);

        $this->smarty->display('templates/libro.tpl');
    }
//hacer bien este error
    function showError($error){
            echo($error);
    }

    function mostrarFormulario($autores,$user){
      //  var_dump($autores);
        $this->smarty->assign('autores', $autores);
        $this->smarty->assign('user', $user);
        $this->smarty->display('templates/agregarLibro.tpl');
    }

}