<html>
    <head></head>
<body>
<?php

require_once "controller/librosController.php" ;
require_once "controller/autoresController.php" ;

$controller = new librosController();
$controllerAut = new autoresController();
$partesURL = explode('/', $_GET['action']);


if($partesURL[0]==''){
    $controller->Home();
}

elseif($partesURL[0]=='autores'){  //queria probar de ver si andaba esto 
    $controllerAut->Autores();
}