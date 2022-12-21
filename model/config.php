<?php

class Config
{
    public function __construct()
    {
        if (gethostbyaddr($_SERVER['REMOTE_ADDR']) == '2a02-a444-4f28-1-a9a8-2f96-a2ff-5297.fixed6.kpn.net') {
            $this->servername = "rdbms.strato.de";
            $this->username = "dbu4073961";
            $this->password = "TYz9vSJ!*%&M";
            $this->dbname = "dbs9476995";

            //laptop Tygo
        } elseif (gethostbyaddr($_SERVER['REMOTE_ADDR']) == 'LAPTOP-8DP1187P') {
            $this->servername = "127.0.0.1";
            $this->username = "root";
            $this->password = "root";
            $this->dbname = "gameplayparty";
        } elseif (gethostbyaddr($_SERVER['REMOTE_ADDR']) == 'Fabian') {
            $this->servername = "127.0.0.1";
            $this->username = "root";
            $this->password = "";
            $this->dbname = "gameplayparty_2";
        }
    }
}