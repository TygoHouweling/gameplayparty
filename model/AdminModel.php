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
        $item = isset($_GET['item']) ? $_GET['item'] : $session;
        $sql = "SELECT * FROM cinemas WHERE cinema_id=$item";
        $result = $this->dataHandler->readsData($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return ($result);
    }

    public function editCinema($cinema_name, $cinema_email, $cinema_housenumber, $cinema_housenumber_addition, $cinema_street, $cinema_postalcode, $cinema_city, $cinema_description, $cinema_password, $cinema_image, $cinema_accessibility)
    {
        $session = $_SESSION['cinema_id'];
        $item = isset($_GET['item']) ? $_GET['item'] : $session;
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
        WHERE cinema_id=$item";
        $result = $this->dataHandler->updateData($sql);
        return ($result);
    }

    public function readCinemas()
    {
        $sql = "SELECT * FROM cinemas WHERE `activated` = 1";
        $result = $this->dataHandler->readsData($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function disableCinema($item)
    {
        $sql = "UPDATE cinemas SET `activated` = 0 WHERE cinema_id = $item";
        $result = $this->dataHandler->updateData($sql);
        return $result;
    }

    public function readLounges()
    {
        $session = $_SESSION['cinema_id'];
        $sql = "SELECT lounge_id,lounge_name FROM lounges WHERE cinema_id=$session AND `enabled` = 1";
        $result = $this->dataHandler->readsData($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function readLounge($item)
    {
        $sql = "SELECT * FROM lounges WHERE lounge_id=$item";
        $result = $this->dataHandler->readsData($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function updateLounge($lounge_name, $amount_chairs, $wheelchair_places, $screensize, $item)
    {
        $sql = "UPDATE lounges SET `lounge_name` = '$lounge_name',`amount_chairs` = '$amount_chairs',`wheelchair_places` = '$wheelchair_places',`screensize` = '$screensize' WHERE lounge_id = $item";
        $result = $this->dataHandler->updateData($sql);
        return $result;
    }

    public function createLounge($lounge_name, $amount_chairs, $wheelchair_places, $screensize)
    {
        $cinema_id = $_SESSION['cinema_id'];
        $sql = "INSERT INTO lounges (cinema_id, lounge_name,amount_chairs,wheelchair_places,screensize) VALUES ('$cinema_id','$lounge_name','$amount_chairs','$wheelchair_places','$screensize')";
        $result = $this->dataHandler->createData($sql);
        return $result;
    }

    public function disableLounge($item){
        $sql = "UPDATE lounges SET `enabled` = 0";
        $result = $this->dataHandler->updateData($sql);
    }
}
