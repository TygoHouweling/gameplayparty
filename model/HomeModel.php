<?php

require_once('./model/DataHandler.php');
class HomeModel
{
    private $DataHandler;
    public function __construct()
    {
        $this->DataHandler = new DataHandler;
    }

    public function showCinemas()
    {
        $sql = "SELECT cinema_id, cinema_name, cinema_description, cinema_accessibility FROM cinemas";
        $result = $this->DataHandler->readsData($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);

        return($result);
    }

    public function showHome()
    {
        // $sql = "SELECT cinema_name, cinema_description, cinema_accessibility FROM cinemas";

    }
}
