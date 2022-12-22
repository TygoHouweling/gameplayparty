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
            case 'createCinema':
                $this->collectCreateCinema();
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
    public function collectCreateCinema()
    {
        if (isset($_POST['submit'])) {
            if (($_SESSION['user_role'] == 1) xor ($_SESSION['user_role'] == 2)) {


                $name = isset($_POST['cinema_name']) ? $_POST['cinema_name'] : null;
                $housenumber = isset($_POST['cinema_housenumber']) ? $_POST['cinema_housenumber'] : null;
                $hnumber_addition = isset($_POST['cinema_housenumber_addition']) ? $_POST['cinema_housenumber_addition'] : null;
                $street = isset($_POST['cinema_street']) ? $_POST['cinema_street'] : null;
                $postalcode = isset($_POST['cinema_postalcode']) ? $_POST['cinema_postalcode'] : null;
                $city = isset($_POST['cinema_city']) ? $_POST['cinema_city'] : null;
                $accessibility = isset($_POST['cinema_accessibility']) ? $_POST['cinema_accessibility'] : null;
                $description = isset($_POST['cinema_description']) ? $_POST['cinema_discription'] : null;
                $image = isset($_POST['cinema_image']) ? $_POST['cinema_image'] : null;

                $register = $this->AdminModel->createCinema($name, $housenumber, $hnumber_addition, $street, $postalcode, $city, $accessibility, $description, $image);
                header('location:?cat=home');
            } else {
                header('location:?cat=home');
            }
        } else {
            $_SESSION['error'] = 'U bent iets vergeten in te vullen';
        }
        include './view/createCinema.php';
    }
}
