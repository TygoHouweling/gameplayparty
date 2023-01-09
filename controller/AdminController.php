<?php

require_once('./model/AdminModel.php');
class AdminController
{
    private $AdminModel;

    public function __construct()
    {
        $this->AdminModel = new AdminModel;
    }

    public function handleRequest()
    {
        $this->checkIfadmin();
        $op = isset($_GET['op']) ? $_GET['op'] : '';

        switch ($op) {
            case 'overview':
                $this->collectShowAdminOverview();
                break;

            case 'deleteItem':
                $this->collectDeleteItem();
                break;
            case 'readDisclaimerItems':
                $this->collectReadDisclaimerItems();
                break;
            case 'editItem':
                $this->collectEditItem();
                break;
            case 'createItem':
                $this->collectCreateItem();
                break;
            case 'readHomepageItems':
                $this->collectReadHomepageItems();
                break;
            case 'editHomepageItem':
                $this->collectEditItem();
                break;
            default:
                $this->collectShowAdminOverview();
        }
    }

    public function collectDeleteItem(){
        $result = $this->AdminModel->deleteItem($_GET['item']);

        if ($_GET['page'] == 1) {
            $this->collectReadHomepageItems();
        } elseif ($_GET['page'] == 2) {
            $this->collectReadDisclaimerItems();
        }
    }

    public function collectShowAdminOverview()
    {
        include('./view/admin/homepage.php');
    }

    public function collectReadHomepageItems()
    {
        if (isset($_POST['submit'])) {
            $row = $this->AdminModel->updateHeader($_POST['h1'], 1);
        }
        $result = $this->AdminModel->readAdminPage(1);


        include('./view/admin/readHomepageItems.php');
    }

    public function collectReadDisclaimerItems()
    {
        if (isset($_POST['submit'])) {
            $row = $this->AdminModel->updateHeader($_POST['h1'], 2);
        }
        $result = $this->AdminModel->readAdminPage(2);

        include('./view/admin/readDisclaimerItems.php');
    }

    public function collectCreateItem()
    {
        if (!isset($_POST['submit'])) {
            include('./view/admin/createItem.php');
            return;
        }

        $header = $_REQUEST['header'];
        $text = isset($_POST['text']) ? $_POST['text'] : null;
        $img = isset($_FILES['img']) && $_FILES['img']['name'] != '' ? $this->imageUpload($_FILES['img']) : './view/img/001.jpg';

        $result = $this->AdminModel->createItem($header, $img, $text, $_GET['page']);

        unset($_POST);
        if ($_GET['page'] == 1) {
            $this->collectReadHomepageItems();
        } elseif ($_GET['page'] == 2) {
            $this->collectReadDisclaimerItems();
        }
    }

    public function collectEditItem()
    {
        $item = $_GET['item'];

        $result = $this->AdminModel->readAdminPageItem($item, $_GET['page']);
        $img = $result[0]['img'];
        if (!isset($_POST['submit'])) {
            include('./view/admin/editItem.php');
            return;
        }

        $header = $_REQUEST['header'];
        $text = isset($_POST['text']) ? addslashes($_POST['text']) : null;
        $img = isset($_FILES['img']) && $_FILES['img']['name'] != '' ? $this->imageUpload($_FILES['img']) : $img;

        $result = $this->AdminModel->updateHomepageItem($item, $header, $img, $text, $_GET['page']);

        unset($_POST);

        if ($_GET['page'] == 1) {
            $this->collectReadHomepageItems();
        } elseif ($_GET['page'] == 2) {
            $this->collectReadDisclaimerItems();
        }
    }

    private function checkIfadmin()
    {
        if (!isset($_SESSION['user_role']) || !$_SESSION['user_role'] >= 1) {
            header('location:?home');
            exit;
        }
    }

    private function imageUpload($file)
    {
        var_dump($file['name']);

        $random_hex = bin2hex(random_bytes(8));
        $target_dir = "./view/img/uploaded/";
        $imageFileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $image = $random_hex . "." . $imageFileType;
        $target_file = $target_dir . basename($image);
        $uploadOk = 1;

        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            return $target_file;
        }
    }

    private function imageDelete($file)
    {
    }
}
