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

            case 'register':
                $this->collectRegisterRequest();
                break;
        }
    }

    public function collectLoginRequest()
    {
        if (!isset($_POST['submit'])) {
            include('./view/login.php');
        } else {
            $password_pattern = '/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/';
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && preg_match($password_pattern, $_POST['password'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
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
            if (password_verify($password, $row['password']) && $email == $row['email']) {
                $_SESSION['loggedIn'] = true;
                $_SESSION['user_fname'] = $row['user_fname'];
                $_SESSION['user_lname'] = $row['user_lname'];
                $_SESSION['user_role'] = $row['role'];
                $_SESSION['user_id'] = $row['user_id'];

                header('location:?cat=home');
            }
        }
        if (!isset($_SESSION['loggedIn'])) {
            $_SESSION['error'] = 'Geen overeenkomstige gebruikers gevonden';
            include('./view/login.php');
        }
    }

    public function collectRegisterRequest()
    {
        if (isset($_POST['submit'])) {

            $password_pattern = '/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/';
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && preg_match($password_pattern, $_POST['password'])) {
                $fname = isset($_POST['user_fname']) ? $_POST['user_fname'] : null;
                $lname = isset($_POST['user_lname']) ? $_POST['user_lname'] : null;
                $province = isset($_POST['user_province']) ? $_POST['user_province'] : null;
                $password = isset($_POST['password']) ? $_POST['password'] : null;
                $email = isset($_POST['email']) ? $_POST['email'] : null;
                $city = isset($_POST['city']) ? $_POST['city'] : null;
                $postalcode = isset($_POST['postal_code']) ? $_POST['postal_code'] : null;
                $street = isset($_POST['streetname']) ? $_POST['streetname'] : null;
                $housenumber = isset($_POST['housenumber']) ? $_POST['housenumber'] : null;
                $hnumber_addition = isset($_POST['housenumber_addition']) ? $_POST['housenumber_addition'] : null;

                $register = $this->AuthModel->createUser($fname, $lname, $province, $password, $email, $city, $postalcode, $street, $housenumber, $hnumber_addition);
                header('location:?cat=auth&op=login');
            } else {
                $_SESSION['error'] = 'Email of wachtwoord voldoet niet aan voorwaarden.';
                include('./view/register.php');
            }
        }
        include './view/register.php';
    }

}