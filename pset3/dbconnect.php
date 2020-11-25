<?php

$servername = "localhost";
$username = "beruangb_alyani";
$passworddb = "N_p5QHyNLRLF";
$dbname = "beruangb_menusys";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passworddb);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
