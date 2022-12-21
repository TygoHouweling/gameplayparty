<?php

require_once('./model/HomeModel.php');
class HomeController
{
    private $HomeModel;
    public function __construct()
    {
        $this->HomeModel = new HomeModel;
    }

    public function handleRequest()
    {
        $op = isset($_GET['op']) ? $_GET['op'] : '';

        switch ($op) {
            case 'home':
                
                $this->collectShowHome();
                break;
            case 'cinemasOverview':
                $this->collectShowCinemas();
                break;
            case 'cinema':
                $this->collectShowCinema();
                break;
            default:
                $this->collectShowHome();
                break;
        }
    }

    private function collectShowCinemas()
    {
        $result = $this->HomeModel->showCinemas();
        include('./view/cinemaOverview.php');
    }
    private function collectShowCinema()
    {
        $result = $this->HomeModel->showCinema();
        include('./view/cinema.php');
    }
    private function collectShowHome()
    {
        $this->HomeModel->showHome();
        include('./view/home.php');
    }
}
