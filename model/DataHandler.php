<?php
require_once('./model/Config.php');
class DataHandler{

    public function __construct()
    {
        $Config = new Config;

        $this->servername = $Config->servername;
        $this->username = $Config->username;
        $this->password = $Config->password;
        $this->dbname = $Config->dbname;

        try {
            $this->dbh = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function __destruct()
    {
        $this->dbh = null;
    }

    public function createData($sql){
        $this->dbh->query($sql);
        return $this->lastInsertId();
    }

    public function readData($sql){
//        return $this->query($sql);
         return $this->dbh->query($sql,PDO::FETCH_ASSOC);
    }
    public function readsData($sql){
//         $this->query($sql);
        return $this->dbh->query($sql,PDO::FETCH_ASSOC);
    }
    public function updateData($sql){
        $sth = $this->dbh->query($sql);
        return $sth->rowCount();
    }
    public function deleteData($sql){
        $sth = $this->dbh->query($sql);
        return $sth->rowCount();
    }
    public function query($query){
        $this->sth = $this->dbh->prepare($query);
        return $this->sth->execute();
    }
    public function lastInsertId(){
        return $this->dbh->lastInsertId();
    }

    public function countPages($limit,$sql){
        $counter = $this->readsData($sql);
        $counter = $counter->fetch(PDO::FETCH_NUM);
        $counter = ceil($counter[0]/$limit);
        return $counter;
    }
}
?>