<?php
require_once('Router.php');
require_once('./api/biblioApiController.php');

 // CONSTANTES PARA RUTEO
 define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

 $router = new Router();

 // rutas
 $router->addRoute("/comentarios", "GET", "biblioApiController", "getComentarios");
 $router->addRoute("/comentarios/:ID", "DELETE", "biblioApiController", "deleteComentario");
 $router->addRoute("/comentarios", "POST", "biblioApiController", "agregarComentario");

 //run
 $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 


