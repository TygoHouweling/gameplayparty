<?php

class AdminController
{

    public function __construct()
    {
    }

    public function handleRequest()
    {
        $op = isset($_GET['op']) ? $_GET['op'] : '';

        switch ($op) {
            case 'overview':
                $this->collectShowAdminOverview();
                break;
            case 'createCinema':
                $this->collectCreateCinema();
                break;
            default:
                $this->collectShowAdminOverview();
        }
    }

    public function collectShowAdminOverview()
    {
        include('./view/admin.php');
    }

    public function collectCreateCinema(){
        
    }
}
