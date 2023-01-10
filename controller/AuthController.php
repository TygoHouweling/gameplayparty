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
                if ($row['activated'] == 1) {
                    $_SESSION['loggedIn'] = true;
                } else {
                    include('./view/login.php');
                    return;
                }
                $_SESSION['cinema_name'] = $row['cinema_name'];
                $_SESSION['cinema_id'] = $row['cinema_id'];
                $_SESSION['user_fname'] = $row['user_fname'];
                $_SESSION['user_lname'] = $row['user_lname'];
                $_SESSION['user_role'] = $row['role'];
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_role'] = $row['role'];
                if ($_SESSION['user_role'] == 1) {
                    header('location:?cat=admin&op=editCinemaPage');
                } elseif ($_SESSION['user_role'] == 2)
                    header('location:?cat=admin');
            }
        }
        if (!isset($_SESSION['loggedIn'])) {
            $_SESSION['error'] = 'Geen overeenkomstige gebruikers gevonden';
            include('./view/login.php');
        }
    }

    public function collectLogoutRequest()
    {
        unset($_SESSION['loggedIn']);
        unset($_SESSION['cinema_name']);
        unset($_SESSION['cinema_id']);
        header('location:?cat=home');
    }


    public function collectCreateCinema()
    {
        if (isset($_POST['submit'])) {
            // if (($_SESSION['user_role'] == 1) xor ($_SESSION['user_role'] == 2)) {

            $name = isset($_POST['cinema_name']) ? $_POST['cinema_name'] : null;

            $password_pattern = '/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/';
            if (filter_var($_POST['cinema_email'], FILTER_VALIDATE_EMAIL) && preg_match($password_pattern, $_POST['cinema_password'])) {
                $email = isset($_POST['cinema_email']) ? $_POST['cinema_email'] : null;
                $password = password_hash($_POST['cinema_password'], PASSWORD_BCRYPT);
            }
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
            include('./view/register.php');
        } else {
            include './view/register.php';
        }
    }

    public function collectAccountRequest()
    {
        $id = isset($_REQUEST['user_id']) ? $_REQUEST['user_id'] : null;
        // var_dump($id);
        $array = $this->AuthModel->readAccount($id);
        $result = $array->fetchAll(PDO::FETCH_ASSOC);

        include 'view/readAccount.php';
    }

    public function collectUpdateAccountRequest()
    {

        $id = isset($_REQUEST['user_id']) ? $_REQUEST['user_id'] : null;
        $firstname = isset($_REQUEST['user_fname']) ? $_REQUEST['user_fname'] : null;
        $lastname = isset($_REQUEST['user_lname']) ? $_REQUEST['user_lname'] : null;
        $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
        $password = isset($_REQUEST['password']) ? $_REQUEST['password'] : null;
        $province = isset($_REQUEST['user_province']) ? $_REQUEST['user_province'] : null;
        $city = isset($_REQUEST['city']) ? $_REQUEST['city'] : null;
        $street = isset($_REQUEST['streetname']) ? $_REQUEST['streetname'] : null;
        $housenumber = isset($_REQUEST['housenumber']) ? $_REQUEST['housenumber'] : null;
        $hnumber_addition = isset($_REQUEST['housenumber_addition']) ? $_REQUEST['housenumber_addition'] : null;
        $postalcode = isset($_REQUEST['postal_code']) ? $_REQUEST['postal_code'] : null;
        $role = isset($_REQUEST['role']) ? $_REQUEST['role'] : null;

        if (isset($_POST['submit'])) {

            $array = $this->AuthModel->updateUser($id, $firstname, $lastname, $email, $password, $province, $city, $street, $housenumber, $hnumber_addition, $postalcode, $role);
        }
    }

    public function collectDeleteUserRequest()
    {
        $id = isset($_REQUEST['user_id']) ? $_REQUEST['user_id'] : null;
        $result = $this->AuthModel->deleteUser($id);
        unset($_SESSION['loggedIn']);
        unset($_SESSION['user_fname']);
        unset($_SESSION['user_lname']);
        unset($_SESSION['user_role']);
        unset($_SESSION['user_id']);
        header('location:?cat=home');
    }
}
