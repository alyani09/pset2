<?php
include_once("dbconnect.php");

    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $publisher = $_POST['publisher'];
    $isbn = $_POST['isbn'];

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO book(title, author, price, description, publisher, isbn)
    VALUES ('$title', '$author','$price','$description', '$publisher','$isbn')";
    $conn->exec($sql);
    echo "<script> alert('Success Add book')</script>";
    echo "<script> window.location.replace('mainpage.php') </script>;";

  } catch(PDOException $e) {
    echo "<script> alert('Error Add Book')</script>";
    echo "<script> window.location.replace('index.html') </script>;";
  }
  
  $conn = null;
?>