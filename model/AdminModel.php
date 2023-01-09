<?php
require_once('./model/DataHandler.php');
class AdminModel
{
    private $dataHandler;
    public function __construct()
    {
        $this->dataHandler = new DataHandler;
    }

    public function readAdminPage($page)
    {
        $sql = "SELECT `area_id`,`h1`,`img`,`text`,`header` FROM pages LEFT JOIN areas USING(page_id) WHERE page_id=$page";
        $result = $this->dataHandler->readsData($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function readAdminPageItem($item, $page)
    {
        $sql = "SELECT `area_id`,`h1`,`img`,`text`,`header` FROM pages LEFT JOIN areas USING(page_id) WHERE area_id=$item AND page_id=$page";
        $result = $this->dataHandler->readsData($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function updateHomepageItem($item, $header, $img, $text, $page)
    {
        $sql = "UPDATE areas SET `header` = '$header', `img` = '$img', `text` = '$text' WHERE area_id = $item AND page_id=$page";
        $result = $this->dataHandler->updateData($sql);
    }

    public function createItem($header, $img, $text, $page)
    {
        $sql = "INSERT INTO areas (`page_id`,`header`,`img`,`text`) VALUES ('$page','$header','$img','$text')";
        $result = $this->dataHandler->createData($sql);
    }

    public function updateHeader($h1, $page)
    {
        $sql = "UPDATE pages SET `h1` = '$h1' WHERE page_id = $page";
        $result = $this->dataHandler->updateData($sql);
        return $result;
    }

    public function deleteItem($item)
    {
        $sql = "DELETE FROM areas WHERE area_id=$item";
        $result = $this->dataHandler->deleteData($sql);
        return $result;
    }

    public function checkCinemas()
    {
        $sql = "SELECT cinema_id, cinema_name FROM cinemas WHERE activated=0";
        $result = $this->dataHandler->readsData($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function acceptCinema($cinema_id)
    {
        $sql = "UPDATE cinemas SET `activated` = 1 WHERE cinema_id=$cinema_id";
        $result = $this->dataHandler->updateData($sql);
        return $result;
    }
    public function denyCinema($cinema_id)
    {
        $sql = "DELETE FROM cinemas WHERE cinema_id=$cinema_id";
        $result = $this->dataHandler->deleteData($sql);
        return $result;
    }

    public function readCinema()
    {
        $session = $_SESSION['cinema_id'];
        $sql = "SELECT * FROM cinemas WHERE cinema_id=$session";
        $result = $this->dataHandler->readsData($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return ($result);
    }

    public function editCinema($cinema_name, $cinema_email, $cinema_housenumber, $cinema_housenumber_addition, $cinema_street, $cinema_postalcode, $cinema_city, $cinema_description, $cinema_password, $cinema_image,$cinema_accessibility)
    {
        $session = $_SESSION['cinema_id'];
        $sql = "UPDATE cinemas SET
        `cinema_name` = '$cinema_name',
        `cinema_email` = '$cinema_email',
        `cinema_housenumber` = '$cinema_housenumber',
        `cinema_housenumber_addition` = '$cinema_housenumber_addition',
        `cinema_street` = '$cinema_street',
        `cinema_postalcode` = '$cinema_postalcode',
        `cinema_housenumber_addition` = '$cinema_housenumber_addition',
        `cinema_city` = '$cinema_city',
        `cinema_description` = '$cinema_description',
        `cinema_password` = '$cinema_password',
        `cinema_accessibility` = '$cinema_accessibility',
        `cinema_image` = '$cinema_image'
        WHERE cinema_id=$session";
        $result = $this->dataHandler->updateData($sql);
        return($result);
    }
}
