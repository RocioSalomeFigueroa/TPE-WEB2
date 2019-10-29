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
            $user = $_POST['user'];
            $pass = $_POST['pass'];

    
           if(!empty($user)&&!empty($pass)){
               $user = $this->model->GetPassword($user);

               if(!empty($user)&&password_verify($pass, $user->password)){
                   session_start();

                   $_SESSION['ID_USER'] =$user->id_usuario;
                   $_SESSION['USERNAME'] =$user->mail;

                   header("Location" .BASE_URL);
               }else{
                header("Location" .URL_login);
               }
           }else {
            header("Location" .URL_login);
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
    