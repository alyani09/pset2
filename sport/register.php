<?php
include_once("dbconnect.php");

//get data first
$name = $_POST['name'];
$email = $_POST['email']; 
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$password = sha1($_POST['password']);

if(!empty($_FILES['uploaded_file'])){
  $path = "profileimages/";
  $path = $path . $email.'.jpg';
   if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)){
        try {
            $sql = "INSERT INTO user(name, email, phone, gender, password)
            VALUES ('$name', '$email','$phone','$gender', '$password');";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "<script> alert('Registration Success')</script>";
            echo "<script> window.location.replace('login.html') </script>;";
        } catch(PDOException $e) {
            echo "<script> alert('Registration Error')</script>";
            echo "<script> window.location.replace('register.html') </script>;";
            
        }
        $conn = null;
    }else{
        echo "<script> alert('Image upload error')</script>";
        echo "<script> window.location.replace('register.html') </script>;";
   }
}
?>
