<?php

require_once('./model/DataHandler.php');
class AuthModel
{
  private $DataHandler;
  public function __construct()
  {
    $this->DataHandler = new DataHandler;
  }

  public function collectUsers($email, $password)
  {
    $sql = "SELECT * FROM cinemas";

    $array = $this->DataHandler->readsData($sql);
    return $array->fetchAll(PDO::FETCH_ASSOC);
  }

  public function createCinema($name, $email, $password, $housenumber, $hnumber_addition, $street, $postalcode, $city, $accessibility, $description, $image)
  {
    try {

      $sql = "INSERT INTO `cinemas`(`cinema_id`, `cinema_name`, `cinema_email`, `cinema_password`, `cinema_housenumber`, `cinema_housenumber_addition`, `cinema_street`, `cinema_postalcode`, `cinema_city`, `cinema_accessibility`, `cinema_description`, `cinema_image`) VALUES (null,'{$name}','{$email}','{$password}','{$housenumber}','{$hnumber_addition}','{$street}','{$postalcode}','{$city}','{$accessibility}','{$description}','{$image}')";
      $results = $this->DataHandler->createData($sql);

      return $results;
    } catch (Exception $e) {
      throw $e;
    }
  }

}