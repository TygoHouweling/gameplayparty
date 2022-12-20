<?php

require_once('./controller/MasterController.php');

if(session_status()==PHP_SESSION_NONE){
    session_start();
}
$master = new MasterController;

$master->handleRequest();