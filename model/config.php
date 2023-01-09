<?php

class Config
{
    public function __construct()
    {
        //laptop Tygo
        
        if (gethostbyaddr($_SERVER['REMOTE_ADDR']) == 'LAPTOP-8DP1187P') {
            $this->servername = "127.0.0.1";
            $this->username = "root";
            $this->password = "root";
            $this->dbname = "gameplayparty";
        } elseif (gethostbyaddr($_SERVER['REMOTE_ADDR']) == 'Fabian') {
            $this->servername = "127.0.0.1";
            $this->username = "root";
            $this->password = "";
            $this->dbname = "gameplayparty_3";
        } elseif(gethostbyaddr($_SERVER['REMOTE_ADDR']) == 'LAPTOP-68PK3NBF') {
            $this->servername = "127.0.0.1";
            $this->username = "root";
            $this->password = "";
            $this->dbname = "gameplayparty_2";
        } else {
            $this->servername = "rdbms.strato.de";
            $this->username = "dbu4073961";
            $this->password = "TYz9vSJ!*%&M";
            $this->dbname = "dbs9476995";
        }
    }
}
