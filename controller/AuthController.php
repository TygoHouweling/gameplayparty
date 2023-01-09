<?php

require_once('./model/AuthModel.php');
class AuthController
{
    public function __construct()
    {
        $this->AuthModel = new AuthModel;
    }

    public function handleRequest()
    {
        $op = isset($_GET['op']) ? $_GET['op'] : '';

        switch ($op) {
            case 'login':
                $this->collectLoginRequest();
                break;

            case 'createCinema':
                $this->collectCreateCinema();
                break;

            case 'logout':
                $this->collectLogoutRequest();
                break;
        }
    }

    public function collectLoginRequest()
    {
        if (!isset($_POST['submit'])) {
            include('./view/login.php');
        } else {
            $password_pattern = '/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/';
            if (filter_var($_POST['cinema_email'], FILTER_VALIDATE_EMAIL) && preg_match($password_pattern, $_POST['cinema_password'])) {

                $email = $_POST['cinema_email'];
                $password = $_POST['cinema_password'];
                $array = $this->AuthModel->collectUsers($email, $password);
                return $this->checkUsers($email, $password, $array);
            } else {
                $_SESSION['error'] = 'Email of wachtwoord voldoet niet aan voorwaarden.';

                include('./view/login.php');
            }
        }
    }

    private function checkUsers($email, $password, $array)
    {
        foreach ($array as $row) {
            if (password_verify($password, $row['cinema_password']) && $email == $row['cinema_email']) {
                $_SESSION['loggedIn'] = true;
                $_SESSION['cinema_name'] = $row['cinema_name'];
                $_SESSION['cinema_id'] = $row['cinema_id'];
                header('location:?cat=home');
            }
        }
        if (!isset($_SESSION['loggedIn'])) {
            $_SESSION['error'] = 'Geen overeenkomstige gebruikers gevonden';
            include('./view/login.php');
        }
    }

    public function collectLogoutRequest()
    {
        if (isset($_GET['logoutConfirm'])) {

            unset($_SESSION['loggedIn']);
            unset($_SESSION['cinema_name']);
            unset($_SESSION['cinema_id']);
            header('location:?cat=home');
        }

        //include('./view/logoutConfirm.php');
        //logout popup
    }

    
    public function collectCreateCinema()
    {
        if (isset($_POST['submit'])) {
            // if (($_SESSION['user_role'] == 1) xor ($_SESSION['user_role'] == 2)) {

                $name = isset($_POST['cinema_name']) ? $_POST['cinema_name'] : null;
                $email = isset($_POST['cinema_email']) ? $_POST['cinema_email'] : null;
                $password = isset($_POST['cinema_password']) ? $_POST['cinema_password'] : null;
                $housenumber = isset($_POST['cinema_housenumber']) ? $_POST['cinema_housenumber'] : null;
                $hnumber_addition = isset($_POST['cinema_housenumber_addition']) ? $_POST['cinema_housenumber_addition'] : null;
                $street = isset($_POST['cinema_street']) ? $_POST['cinema_street'] : null;
                $postalcode = isset($_POST['cinema_postalcode']) ? $_POST['cinema_postalcode'] : null;
                $city = isset($_POST['cinema_city']) ? $_POST['cinema_city'] : null;
                $accessibility = isset($_POST['cinema_accessibility']) ? $_POST['cinema_accessibility'] : null;
                $description = isset($_POST['cinema_description']) ? $_POST['cinema_discription'] : null;
                $image = isset($_POST['cinema_image']) ? $_POST['cinema_image'] : null;

                $register = $this->AuthModel->createCinema($name, $email, $password, $housenumber, $hnumber_addition, $street, $postalcode, $city, $accessibility, $description, $image);
                header('location:?cat=auth&op=login');
            } else {
                header('location:?cat=auth&op=login');
            }
        }
        
    }
