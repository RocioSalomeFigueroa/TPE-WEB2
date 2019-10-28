<?php

require_once 'controller/librosController.php' ;
require_once 'controller/autoresController.php' ;

$action = $_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$controller = new librosController();
$controllerAut = new autoresController();


if($action == ''){
    $controller->traerLibros();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);

        if($partesURL[0] == "libros"){
            $controller->traerLibros();
        }
        elseif($partesURL[0] == "libro"){
            if(isset($partesURL[1])){
                $controller->traerLibro($partesURL[1]);
            }
        }
        elseif($partesURL[0] == "borrar"){
            if(isset($partesURL[1])){
                $controller->deleteLibro($partesURL[1]);
            }
        }
        elseif($partesURL[0] == "insertar"){
            $controller->addLibro();
        }
        elseif($partesURL[0]=='autores'){  //queria probar de ver si andaba esto 
            $controllerAut->Autores();
        }
        elseif($partesURL[0] == "autor"){
            if(isset($partesURL[1])){
                $controllerAut->traerAutor($partesURL[1]);
            }
        }
        elseif($partesURL[0] == "agregarAutor"){
            $controllerAut->addAutor();
        }
    }
}