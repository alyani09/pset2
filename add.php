<?php
include_once('dbconnect.php');
include('navbarmain.php');

$name = $_GET['name'];
$email = $_GET['email'];


if (isset($_GET['id'])) {
    $id = $_GET['id'];
  $calories = $_GET['calories'];
  $hrv = $_GET['hrv'];
  $duration = $_GET['duration']; 
  $location = $_GET['location']; 
    
  
    try {
        $sql = "INSERT INTO performance(id, calories, hrv, duration, location, email)
        VALUES ('$id', '$calories', '$hrv', '$duration', '$location', '$email')";
      // use exec() because no results are returned
      $conn->exec($sql);
      echo "<script> alert('Insert Success')</script>";
      echo "<script> window.location.replace('mainpage.php?email=".$email."&name=".$name."') </script>;";
  
    } catch(PDOException $e) {
      echo "<script> alert('Insert Error')</script>";
      echo "Error: " . $e->getMessage();
    }
}
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Performance Indicator</title>

</head>

<body>

    <div class="container">
        <form action="add.php" method="get" onsubmit="return confirm('Are you sure?');">
            <h1>Add New Performance Indicator</h1>
            <input type="hidden" name="name" name="name" value="<?php echo$name;?>"><br>
            <input type="hidden" name="email" name="email" value="<?php echo$email;?>"><br>
            <input type="hidden" name="id" name="id" value="" required><br>
            
            <label for="calories"><b>Calories Intake</b></label><br>
            <input type="text" id="calories" name="calories" value="" placeholder="Enter Calories Intake" required><br>

            <label for="hrv"><b>Heart Rate Variability</b></label><br>
            <input type="text" id="hrv" name="hrv" value="" placeholder="Enter Heart Rate Variability" required><br>

            <label for="duration"><b>Duration</b></label><br>
            <input type="text" id="duration" name="duration" value="" placeholder="Enter Duration" required><br>

            <label for="location"><b>Location</b></label><br>
            <input type="text" id="location" name="location" value="" placeholder="Enter Location" required><br><br>            

            <input type="submit" value="Submit"><br>
            <br>
            <p align="center"><a href="mainpage.php?email=<?php echo $email. '&name='.$name?>">Back</a></p>
        </form>
    </div>

</body>

</html>