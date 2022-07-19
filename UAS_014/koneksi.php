<?php
$servername = 'localhost';
$username = 'root';
$password ='';
$database = 'item';
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_error .') '. $conn->connect_error);
}
?>