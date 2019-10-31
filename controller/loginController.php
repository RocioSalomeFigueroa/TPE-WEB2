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
    
        public function verifyUser() {

            $username = $_POST['user'];
            $password = $_POST['pass'];
    
            $user = $this->model->GetPassword($username);
    
            if (!empty($user) && password_verify($password, $user->password)) {
                
                session_start();

                $_SESSION['ID_USER'] = $user->id;
                $_SESSION['USERNAME'] = $user->username;
                
               header('Location: ' . BASE_URL);
            // $this->view->showLogin("inicio sesion");
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

            echo 'You are in!' . session_status();

             exit;

            /* header('Location: ' . URL_login);
            $this->view->showLogin("se cerro la sesion"); */
        }
    
    
    }
    