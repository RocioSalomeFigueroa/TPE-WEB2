<?php

require_once 'controller/librosController.php' ;
require_once 'controller/autoresController.php' ;

$controller = new librosController();
$controllerAut = new autoresController();
$partesURL = explode('/', $_GET['action']);


    if($partesURL[0]==''){
        $controller->Home();
    }
    elseif($partesURL[0] == "libros"){//tambien queria ver si andaba esto, me tira error
        if(isset($partesURL[1])){
            $controller->traerLibro($partesURL[1]);//creo que haber pasado esto como parametro me rompio un poco las cosas
        }else{
            $controller->Home();
        }
    }
    elseif($partesURL[0]=='autores'){  //queria probar de ver si andaba esto 
        $controllerAut->Autores();
    }

    