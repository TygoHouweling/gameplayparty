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
            case 'disclaimer':
                $this->collectShowDisclaimers();
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
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $result = $this->HomeModel->showPage($page);
        if ($page == 1) {
            include('./view/home.php');
        } elseif ($page == 2) {
            include('./view/disclaimers.php');
        }
    }
}
