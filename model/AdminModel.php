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
}
