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
            case 'readHomepageItems':
                $this->collectReadHomepageItems();
                break;
            case 'editHomepageItem':
                $this->collectEditHomepageItem();
                break;
            case 'createHomepageItem':
                $this->collectCreateHomepageItem();
                break;
            default:
                $this->collectShowAdminOverview();
        }
    }

    public function collectShowAdminOverview()
    {
        include('./view/admin/homepage.php');
    }

    public function collectReadHomepageItems()
    {
        $result = $this->AdminModel->readAdminHomepage();


        include('./view/admin/readHomepageItems.php');
    }

    public function collectCreateHomepageItem()
    {
        if (!isset($_POST['submit'])) {
            include('./view/admin/createHomepageItem.php');
            return;
        }

        $header = $_REQUEST['header'];
        $text = isset($_POST['text']) ? $_POST['text'] : null;
        $img = isset($_FILES['img']) && $_FILES['img']['name'] != '' ? $this->imageUpload($_FILES['img']) : 'default.png';

        $result = $this->AdminModel->createHomepageItem($header, $img, $text);

        unset($_POST);
        $this->collectReadHomepageItems();
    }

    public function collectEditHomepageItem()
    {
        $item = $_GET['item'];

        $result = $this->AdminModel->readAdminHomepageItem($item);
        $img = $result[0]['img'];
        if (!isset($_POST['submit'])) {
            include('./view/admin/editHomepageItem.php');
            return;
        }

        $header = $_REQUEST['header'];
        $text = isset($_POST['text']) ? $_POST['text'] : null;
        $img = isset($_FILES['img']) && $_FILES['img']['name'] != '' ? $this->imageUpload($_FILES['img']) : $img;

        $result = $this->AdminModel->updateHomepageItem($item, $header, $img, $text);

        unset($_POST);
        $this->collectEditHomepageItem();
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
