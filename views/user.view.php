<?php
    require_once('libs/Smarty.class.php');
    require_once('helpers/auth.helper.php');

class TaskView {

    private $smarty;

    public function __construct() {
        $authHelper = new AuthHelper();
        $userName = $authHelper->getLoggedUserName();
        
        $this->smarty = new Smarty();
        $this->smarty->assign('basehref', BASE_URL);
        $this->smarty->assign('userName', $userName);
    }
