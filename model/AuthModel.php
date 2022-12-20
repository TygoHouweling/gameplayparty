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


}
