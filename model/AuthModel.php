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
    $sql = "SELECT * FROM users";

    $array = $this->DataHandler->readsData($sql);
    return $array->fetchAll(PDO::FETCH_ASSOC);
  }

  public function createUser($fname, $lname, $province, $password, $email, $city, $postalcode, $street, $housenumber, $hnumber_addition)
  {

    try {
      $password = password_hash($password, PASSWORD_BCRYPT);

      $sql = "INSERT INTO `users`(`user_id`, `user_fname`, `user_lname`, `user_province`, `password`, `email`, `city`, `postal_code`, `streetname`, `housenumber`, `housenumber_addition`) VALUES (null,'{$fname}','{$lname}','{$province}','{$password}','{$email}','{$city}','{$postalcode}','{$street}','{$housenumber}','{$hnumber_addition}')";
      $results = $this->DataHandler->createData($sql);

      return $results;

    } catch (Exception $e) {
      throw $e;
    }
  }

  public function readAccount($id) {
    try{
        $sql = "SELECT * FROM `users` WHERE user_id='{$_SESSION['user_id']}'";
        $results = $this->DataHandler->readData($sql);
        return $results;
    } catch (Exception $e){
        throw $e;
    }
}

public function updateUser($id, $firstname, $lastname, $email, $password, $province, $city, $street, $housenumber, $hnumber_addition, $postalcode, $role) {
  $sql = "UPDATE `users` SET `user_fname`='{$firstname}', `user_lname`='{$lastname}', `email`='{$email}', `password`='{$password}', `user_province`='{$province}', `city`='{$city}', `streetname`='{$street}', `housenumber`='{$housenumber}', `housenumber_addition`='{$hnumber_addition}', `postal_code`='{$postalcode}', `role`='{$role}' WHERE `user_id`='{$id}'";

  $results = $this->DataHandler->updateData($sql);
  return $results;
  }

}