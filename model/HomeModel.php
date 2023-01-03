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
    public function showCinema()
    {
        $sql = "SELECT * FROM cinemas WHERE cinema_id = " . $_GET['item'] ;
        $result = $this->DataHandler->readsData($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return($result);
    }

    public function showHome()
    {
        $sql = "SELECT `h1`,`header`,`img`,`text` FROM homepage JOIN homepage_area USING(homepage_id)";
        $result = $this->DataHandler->readsData($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return($result);
    }

    public function createCinema($name, $housenumber, $hnumber_addition, $street, $postalcode, $city, $accessibility, $description, $image){

        try {
    
          $sql = "INSERT INTO `cinemas`(`cinema_id`, `cinema_name`, `cinema_housenumber`, `cinema_housenumber_addition`, `cinema_street`, `cinema_postalcode`, `cinema_city`, `cinema_accessibility`, `cinema_description`, `cinema_image`) VALUES (null,'{$name}','{$housenumber}','{$hnumber_addition}','{$street}','{$postalcode}','{$city}','{$accessibility}','{$description}','{$image}')";
          $results = $this->DataHandler->createData($sql);
    
          return $results;
    
        } catch (Exception $e) {
          throw $e;
        }
      }
}
