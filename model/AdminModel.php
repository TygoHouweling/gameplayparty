<?php
require_once('./model/DataHandler.php');
class AdminModel {
    private $dataHandler;
    public function __construct()
    {
        $this->dataHandler = new DataHandler;
    }

    public function readAdminHomepage() {
        $sql = "SELECT `area_id`,`h1`,`img`,`text`,`header` FROM homepage LEFT JOIN homepage_area USING(homepage_id)";
        $result = $this->dataHandler->readsData($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function readAdminHomepageItem($item) {
        $sql = "SELECT `area_id`,`h1`,`img`,`text`,`header` FROM homepage LEFT JOIN homepage_area USING(homepage_id) WHERE area_id=$item";
        $result = $this->dataHandler->readsData($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function updateHomepageItem($item, $header, $img, $text) {
        $sql = "UPDATE homepage_area SET `header` = '$header', `img` = '$img', `text` = '$text' WHERE area_id = $item";
        $result = $this->dataHandler->updateData($sql);
    }
}