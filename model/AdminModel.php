<?php
require_once('./model/DataHandler.php');
class AdminModel {
    public function __construct()
    {
        $this->dataHandler = new DataHandler;
    }

    public function readAdminHomepage() {
        $sql = "SELECT * FROM homepage";
        $result = $this->dataHandler->readsData($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function updateHomepage($h1,$h2_1,$img_1,$con_1,$h2_2,$img_2,$con_2) {
        $sql = "INSERT INTO homepage (h1,h2_1,img_1,con_1,h2_2,img_2,con_2)VALUES($h1,$h2_1,$img_1,$con_1,$h2_2,$img_2,$con_2)";
        echo '<pre>';
        var_dump($sql);
        echo '</pre>';
        $result = $this->dataHandler->updateData($sql);
    }
}