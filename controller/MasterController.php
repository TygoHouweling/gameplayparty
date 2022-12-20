<?php

require_once('./model/config.php');
class MasterController
{

    public function __construct()
    {
    }

    public function handleRequest()
    {
        $cat = isset($_GET['cat']) ? $_GET['cat'] : '';

        switch ($cat) {
            case 'home':
                $this->collectShowHome();
                break;
            default:
                $this->collectShowHome();
                break;
        }
    }

    private function collectShowHome(){
        include('./view/home.php');
    }
}
