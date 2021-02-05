<?php
session_start();
include('navbarmain.php'); 
include_once("dbconnect.php");


$name = $_GET['name'];
$email = $_GET['email'];

  if (isset($_SESSION["email"])){
    if (isset($_GET['operation'])) {
      $id = $_GET['id'];
      try {
        $sql = "DELETE FROM performance WHERE email='$email' AND id='$id'";
        $conn->exec($sql);
        echo "<script> alert('Delete Success')</script>";
      } catch(PDOException $e) {
        echo "<script> alert('Delete Error')</script>";
      }
    }

    try {
       
        $sql = "SELECT * FROM performance WHERE email = '$email'";    
        $stmt = $conn->prepare($sql );
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $performance = $stmt->fetchAll(); 

        echo "<div class='tableplan'>";
        echo "<p><h1 align='center'>Cyclist Performance Indicator</h1></p>";
        echo "<table border='1'>
        <tr>
          <th>Time</th>
          <th>Calories Intake</th>
          <th>Heart Rate Variability</th>
          <th>Duration</th>
          <th>Location</th>
          <th>Operation</th>
        </tr>";
        echo "</div>";
        
        foreach($performance as $performance) {
            echo "<tr>";

            echo "<td>".date_format(date_create($performance['time']),"d/m/Y H:i a")."</td>";
            echo "<td><p align='center'>".$performance['calories']."</td>";
            echo "<td><p align='center'>".$performance['hrv']."</td>";
            echo "<td><p align='center'>".$performance['duration']."</td>";
            echo "<td>".$performance['location']."</td>";
            echo "<td><a href='mainpage.php?email=".$email."&name=".$name."&id=".$performance['id']."&operation=del' onclick= 'return confirm(\"Delete. Are your sure?\");'>Delete</a><br>
            <a href='update.php?email=".$email."&name=".$name."&id=".$performance['id']."&calories=".$performance['calories'].
            "&hrv=".$performance['hrv']."&duration=".$performance['duration']."&location=".$performance['location']."&time=".$performance['time']." '>Update</a></td>";
            echo "</tr>";
        } 
        echo "</table>";

    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
    
      }else{
        echo "<script> alert('Session Expired!!!')</script>";
        echo "<script> window.location.replace('login.html') </script>;";
      }
  $conn = null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    

    
</body>


</html>
