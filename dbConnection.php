<?php
$databaseHost = 'localhost';
$databaseName = 'crud_form';
$databaseUsername = 'root';
$databasePassword = '';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}