<?php

require_once('./controller/HomeController.php');
class MasterController
{

    private $homeController;

    public function __construct()
    {
        $this->homeController = new HomeController;
    }

    public function handleRequest()
    {
        $cat = isset($_GET['cat']) ? $_GET['cat'] : '';

        switch ($cat) {
            case 'home':
                $this->homeController->handleRequest();
                break;
            default:
                $this->homeController->handleRequest();
                break;
        }
    }

}
