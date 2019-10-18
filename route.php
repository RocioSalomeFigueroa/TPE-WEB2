<html>
    <head></head>
<body>
<?php

require_once "controller/librosController.php" ;

$controller = new librosController();
$partesURL = explode('/', $_GET['action']);


if($partesURL[0]==''){
    $controller->Home();
}