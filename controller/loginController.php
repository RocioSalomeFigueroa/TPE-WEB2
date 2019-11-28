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
        
        public function showLogin() {
            $this->view->showLogin();
        }
        public function home() {
            $this->view->homeView();
        }
    
        public function verifyUser() {

            $username = $_POST['user'];
            $password = $_POST['pass'];
    
            $user = $this->model->GetPassword($username);
    
            if (!empty($user) && password_verify($password, $user->pass)) {
                
                session_start();

                $_SESSION['ID_USER'] = $user->id_usuario;
                $_SESSION['USERNAME'] = $user->username;
                $_SESSION['admin'] = $user->admin;
                
               header('Location: ' . URL_libros);
            } else {
                
                $this->view->showLogin("Login incorrecto");
            }
        }
    
        public function logout() {
            session_start();
            // Unset all of the session variables.
            unset($_SESSION['USERNAME']);
            // Finally, destroy the session.    
            session_destroy();  
            
            header('Location: ' . URL_login);
            $this->view->showLogin("se cerro la sesion");

        }

        function registro(){
            $user = $this->getUser();
            $this->view->registro($user);
        }

        function nuevoUsuario(){
            $nombre = $_POST['nombre'];
            $fecha= $_POST['fecha'];
            $mail= $_POST['email'];
            $user= $_POST['user'];
            $password= $_POST['pass'];

            $pass = password_hash($password, PASSWORD_DEFAULT);

            if(!empty($mail) && !empty($password)&& !empty($user)){
            //    var_dump($user, $hash, $nombre, $fecha, $mail);
                
                $this->model->addUsuario($user, $pass, $nombre, $fecha, $mail);
                header('Location: ' . BASE_URL); 
            }
            else {
                $this->view->showLogin("No se pudo crear el usuario");
            }
        }

        function mostrarUsuarios(){
            $user = $this->getUser();
            $usuarios = $this->model->getUsuarios();
            $this->view->mostrarUsuarios($usuarios, $user);
        }
        function getUser(){
            session_start();
    
            if(!isset($_SESSION['ID_USER'])){
                $user = [
                    "id" => "null",
                    "name" => "Visitante",
                    "admin" => "null",
                ];
            }
            else{
                $user = [
                    "id" => $_SESSION['ID_USER'],
                    "name" => $_SESSION['USERNAME'],
                    "admin" =>  $_SESSION['admin'],
                ];
            }
    
            return $user;
        }

        function editarUsuario(){
           
            $user = $_POST['user'];
            $administrador = 0;
            if(isset($_POST['administrador'])){
                $administrador = 1;
            }

           // var_dump($user); die;

            $this->model->cambiarAdmin( $administrador, $user);
            header('Location: usuarios');
        }
    
    
    }
    