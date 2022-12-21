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
        } else {
            $this->servername = "rdbms.strato.de";
            $this->username = "dbu4073961";
            $this->password = "TYz9vSJ!*%&M";
            $this->dbname = "dbs9476995";
        }
    }
}
