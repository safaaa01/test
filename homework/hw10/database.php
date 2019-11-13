<?php
// Create environment variables
$hostname   = getenv('DB_HOSTNAME');
$username   = getenv('DB_USERNAME_PUBLIC1');
$password   = getenv('DB_PW_PUBLIC1');
$dbname     = getenv('DB_NAME1');
// Establish the connection to the database
$connection = mysqli_connect($hostname, $username, $password, $dbname);
$first_name = "";
    $last_name = "";    
    $password = "";
    $email = "";
    $password = "";
    $retypePassword = "";
    $rpw = "";
    $match = "";
    $create = "";
    $mail = "";
    $pw = "";
    $first = "";
    $last = "";
    $failure = "";
?>