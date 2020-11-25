<?php

$servername = "localhost";
$username = "root";
$passworddb = "";
$dbname = "menu_system";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passworddb);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>