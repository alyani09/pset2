<?php
include_once("dbconnect.php");
include('navbarmain.php');

$name = $_GET['name'];
$email = $_GET['email'];
$calories = $_GET['calories'];
$hrv = $_GET['hrv'];
$duration = $_GET['duration'];
$location = $_GET['location'];


if (isset($_GET['operation'])) {
    try {
        $sqlupdate = "UPDATE performance SET calories = '$calories', hrv = '$hrv', duration = '$duration', location = '$location' WHERE email = '$email'";
        $conn->exec($sqlupdate);
        echo "<script> alert('Update Success')</script>";
        echo "<script> window.location.replace('mainpage.php?email=".$email."&name=".$name."') </script>;";
      } 
      catch(PDOException $e) {
        echo "<script> alert('Update Error')</script>";
      }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Performance Indicator</title>
</head>
<body>

<div class="container">
    <form action="update.php" method="get" onsubmit="return confirm('Are you sure to update?');">
    <h1 >Update Performance Indicator:</h1>
    <input type="hidden" id="name" name="name" value="<?php echo $name;?>"><br>
        <input type="hidden" id="email" name="email" value="<?php echo $email;?>"><br>
        <input type="hidden" id="id" name="id" value="<?php echo $id;?>" required><br>
        <input type="hidden" id="operation" name="operation" value="update"><br>
        <label for="calories">Calories Intake:</label><br>
        <input type="text" id="calories" name="calories" value="<?php echo $calories;?>" required><br>
        <label for="hrv">Heart Rate Variability:</label><br>
        <input type="text" id="hrv" name="hrv" value="<?php echo $hrv;?>" required><br>
        <label for="duration">Duration (KM)</label><br>
        <input type="text" id="duration" name="duration" value="<?php echo $duration;?>" required><br>
        <label for="location">Location</label><br>
        <input type="text" id="location" name="location" value="<?php echo $location;?>" required><br>
        <input type="submit" value="Update">
    <br>
    <p align="center"><a href="mainpage.php?email=<?php echo $email. '&name='.$name?>">Cancel</a></p>
    </form>
  </div>
</body>

</html>
