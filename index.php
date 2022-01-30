<?php

require_once './config.php';
require_once './classes/user.php';

$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($conn && $conn->connect_error){
    echo "Errore connessione: {$conn->connect_error}";
}


$ale = new User();
$ale->name = "Ale";
$ale->surname = "Lui";
$ale->email = "alelui@gmail.com";

echo "<h1>{$ale->getFullName()}</h1>";