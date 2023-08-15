<?php
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "amila_photography";
// Create connection
$connnect = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
//Check Connectiom
if ($connnect->connect_error) {
    # code...
    die("Connectiom Failed:" . $connnect->connect_error);
}
// echo "Connection Sucessfully;"
    ?>
