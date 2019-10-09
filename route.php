<html>
<head></head>
<body>
<?php
   // require_once('controllers/task.controller.php');
    require_once('controllers/login.controller.php');
    require_once('Router.php');

    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", BASE_URL . 'login');
  //  define("VER", BASE_URL . 'ver');

  $r = new Router();

      // rutas
      $r->addRoute("login", "GET", "LoginController", "showLogin");
      $r->addRoute("verify", "POST", "LoginController", "verifyUser");
      $r->addRoute("logout", "GET", "LoginController", "logout");

      $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);



//    require_once('controllers/task.controller.php');
//    require_once('controllers/login.controller.php');
//    require_once('Router.php');


/*     // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", BASE_URL . 'login');
    define("VER", BASE_URL . 'ver');

    $r = new Router();

    // rutas
    $r->addRoute("login", "GET", "LoginController", "showLogin");
    $r->addRoute("verify", "POST", "LoginController", "verifyUser");
    $r->addRoute("logout", "GET", "LoginController", "logout");
    $r->addRoute("ver", "GET", "TaskController", "showTasks");
    $r->addRoute("tarea/:ID", "GET", "TaskController", "showTask");
    $r->addRoute("eliminar/:ID", "GET", "TaskController", "deleteTask");
    $r->addRoute("finalizar/:ID", "GET", "TaskController", "endTask");
    $r->addRoute("nueva", "POST", "TaskController", "addTask");

    //Ruta por defecto.
    $r->setDefaultRoute("TaskController", "showTasks");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
 --> */
