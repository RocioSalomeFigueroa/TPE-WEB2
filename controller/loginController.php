<?php
require_once './view/loginView.php';
require_once "./model/userModel.php";

class loginController{

        private $model;
        private $view;
    
        function __construct(){
            $this->model = new UserModel();
            $this->view = new loginView();
        }
        
        public function IniciarSesion(){
            $password = $_POST['pass'];
    
            $usuario = $this->model->GetPassword($_POST['user']);
    
            if (isset($usuario) && $usuario != null && password_verify($password, $usuario->password)){
                session_start();
                $_SESSION['user'] = $usuario->email;
                $_SESSION['userId'] = $usuario->id;
                header("Location: " . BASE_URL);
            }else{
                header("Location: " . URL_login);
            }
        }
    
        public function Login(){
            $this->view->DisplayLogin();
        }
    
        public function Logout(){
            session_start();
            session_destroy();
            header("Location: " . URL_login);
        }
    
        
    }
    