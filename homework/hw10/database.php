<?php
// Create environment variables
$hostname   = getenv('DB_HOSTNAME');
$username   = getenv('DB_USERNAME_PUBLIC1');
$password   = getenv('DB_PW_PUBLIC1');
$dbname     = getenv('DB_NAME1');
// Establish the connection to the database
$connection = mysqli_connect($hostname, $username, $password, $dbname);
?>