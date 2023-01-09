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

    return ($result);
  }
  public function showCinema()
  {
    $sql = "SELECT * FROM cinemas WHERE cinema_id = " . $_GET['item'];
    $result = $this->DataHandler->readsData($sql);
    $result = $result->fetchAll(PDO::FETCH_ASSOC);
    return ($result);
  }

  public function showPage($page)
  {
    $sql = "SELECT `h1`,`header`,`img`,`text` FROM pages JOIN areas USING(page_id) WHERE page_id=$page";
    $result = $this->DataHandler->readsData($sql);
    $result = $result->fetchAll(PDO::FETCH_ASSOC);
    return ($result);
  }

}
