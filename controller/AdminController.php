<?php

class AdminController
{

    public function __construct()
    {
    }

    public function handleRequest()
    {
        $this->checkIfadmin();
        $op = isset($_GET['op']) ? $_GET['op'] : '';

        switch ($op) {
            case 'overview':
                $this->collectShowAdminOverview();
                break;
            case 'editHomepage':
                $this->collectEditHomepage();
                break;
            default:
                $this->collectShowAdminOverview();
        }
    }

    public function collectShowAdminOverview()
    {
        include('./view/admin/homepage.php');
    }

    public function collectEditHomepage(){
        if(!isset($_POST['submit'])){

            include('./view/admin/editHomepage.php');
            return;
        }




    }

    private function checkIfadmin(){
        if(!isset($_SESSION['user_role'])||!$_SESSION['user_role']>=1){
            header('location:?home');
            exit;
        }
    }
}
