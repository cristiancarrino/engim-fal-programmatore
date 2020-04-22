<?php 
    $servername = "localhost";
    $username = "engim";
    $password = "engim";
    $dbname = "engim";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("ATTENZIONE CONNESSIONE FALLITA: " . $conn->connect_error);
    }

    $conn->set_charset("utf8");
    //date_default_timezone_set('Europe/Rome');
?>