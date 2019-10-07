<?php
//DB details
$dbHost = 'db';
$dbUsername = 'root';
$dbPassword = '123';
$dbName = 'my-database';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($db->connect_error){
    die("Unable to connect database: " . $db->connect_error);
}
