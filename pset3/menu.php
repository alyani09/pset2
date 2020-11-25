<?php
include_once("dbconnect.php");


$name = $_POST["name"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];
$calories = $_POST["calories"];


try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO display( name, price, quantity, calories)
    VALUE ('$name', '$price', '$quantity', '$calories')";
    $conn->exec($sql);
    echo "<script> alert('Menu Added')</script>";
    //echo "<script> window.location.replace('menu.html')</script>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    echo "<script> alert('Error')</script>";
    //echo "<script> window.location.replace('menu.html')</script>";
}
    

$conn = null;
echo "<script> window.location.replace('menu.html')</script>";

?>