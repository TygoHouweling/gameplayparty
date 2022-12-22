<?php

require_once('./model/AdminModel.php');
class AdminController
{

    public function __construct()
    {
        $this->adminModel = new AdminModel;
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

    public function collectEditHomepage()
    {
        $result = $this->adminModel->readAdminHomepage();
        $img_1 = $result[0]['img_1'];
        $img_2 = $result[0]['img_2'];

        if (!isset($_POST['submit'])) {

            $h1 = $result[0]['h1'];
            $h2_1 = $result[0]['h2_1'];
            $con_1 = $result[0]['con_1'];
            $h2_2 = $result[0]['h2_2'];
            $con_2 = $result[0]['con_2'];
            include('./view/admin/editHomepage.php');
            return;
        }

        echo "<pre>" . var_dump($_REQUEST) . "</pre>";
        $h1 = $_REQUEST['h1'];
        $h2_1 = $_REQUEST['h2_1'];
        $con_1 = isset($_POST['con_1']) ? $_POST['con_1'] : null;
        $h2_2 = $_REQUEST['h2_2'];
        $con_2 = isset($_POST['con_2']) ? $_POST['con_2'] : null;
        $img_1 = isset($_FILES['file_1']) && $_FILES['file_1'] != '' ? $this->imageUpload($_FILES['file_1']) : $img_1;
        $img_2 = isset($_FILES['file_2']) && $_FILES['file_2'] != '' ? $this->imageUpload($_FILES['file_2']) : $img_2;

        $result = $this->adminModel->updateHomepage($h1, $h2_1, $img_1, $con_1, $h2_2, $img_2, $con_2);

        include('./view/admin/editHomepage.php');
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
