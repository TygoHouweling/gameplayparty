<?php

require_once('./controller/HomeController.php');
require_once('./controller/AuthController.php');
require_once('./controller/AdminController.php');
class MasterController
{

    private $homeController;

    public function __construct()
    {
        $this->homeController = new HomeController;
        $this->authController = new AuthController;
        $this->adminController = new AdminController;
    }

    public function handleRequest()
    {
        $cat = isset($_GET['cat']) ? $_GET['cat'] : '';

        switch ($cat) {
            case 'home':
                $this->homeController->handleRequest();
                break;
            case 'auth':
                $this->authController->handleRequest();
                break;
            case 'admin':
                $this->adminController->handleRequest();
                break;
            default:
                $this->homeController->handleRequest();
                break;
        }
    }
}
