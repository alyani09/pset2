<?php
include_once("dbconnect.php");
include("navbarmain.php");


$name = $_GET['name'];
$email = $_GET['email'];

try{

$sql = "SELECT * FROM user WHERE email = '$email'";
$stmt = $conn->prepare($sql );
$stmt->execute();
$user = $stmt->fetchAll(); 
echo "<head></head><link rel='stylesheet' href='styles.css'></head>";

echo "<div class='tableprofile'>";
echo "<p><h1 align='center'>Profile</h1></p>";
echo "<table border='1' >";


 foreach($user as $user) {
    echo "<tr><td colspan='2' > <img src='profileimages/$email.jpg' width='150' height='250' class = 'center'> </td></tr>";
    echo "<tr><td><b>Name<b></td><td>".$user['name']."</td></tr>";
    echo "<tr><td><b>Email<b></td><td>".$user['email']."</td></tr>";
    echo "<tr><td><b>Gender<b></td><td>".$user['gender']."</td></tr>";
    echo "<tr><td><b>Contact Number<b></td><td>".$user['phone']."</td></tr>";
    echo "<tr><td><b>Registration Date</b></td><td>".date_format(date_create($user['time']),"d/m/Y H:i a")."</td></tr>";
 }
 echo "</table><br>";
//  echo "<p align=\"center\"><a href='updateprofile.php?email=".$email."&name=".$name."&contact=".$user['contact']."'>Update</a></td>";
 echo "<p align=\"center\"><a href=\"mainpage.php?email=$email&name=$name\">Back</a></p>";
 echo "</div>";

}  catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
    
$conn = null;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-1.0">
        <title>Your Profile</title>
    </head>
    <body>
    </body>
</html>
