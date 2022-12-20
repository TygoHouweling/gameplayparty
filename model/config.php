<?php

if (gethostbyaddr($_SERVER['REMOTE_ADDR']) == '2a02-a444-4f28-1-a9a8-2f96-a2ff-5297.fixed6.kpn.net') {
    $servername = "rdbms.strato.de";
    $username = "dbu4073961";
    $password = "TYz9vSJ!*%&M";
    $dbname = "dbs9476995";
    
    //laptop Tygo
} elseif (gethostbyaddr($_SERVER['REMOTE_ADDR']) == 'LAPTOP-8DP1187P') {
    $servername = "127.0.0.1";
    $username = "root";
    $password = "root";
    $dbname = "gameplayparty";
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
