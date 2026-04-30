<?php

$host = "localhost"; // DO NOT CHANGE
$dbname = "xyz"; // DELETE XYZ AND CHANGE TO NAME OF YOUR DATABASE IN XAMPP CONTROL DASHBOARD 
$username = "root"; //DO NOT CHANGE
$password = ""; // LEAVE BLANK

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
