<?php
include_once("dbconnect.php");

// $name = $_GET['name'];
// $email = $_GET['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <style>
 
  .container {
    padding: 80px 120px;
    height: 30%;
  }.margin {
    margin-bottom: 45px;
}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
    .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
    }
  .bg-1 h3 {color: #fff;
  }
  .bg-1 p {font-style: italic;
  }
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }  
  .navbar {
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 12px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #black font !important;
    line-height: 20px;
    font-size: 17px;
    color
  }
  .navbar-nav li a:hover {
    color: #SlateBlue !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
    line-height: 20px;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(50%);
    filter: grayscale(50%); /* make all photos black and white */
    width: 100%; /* Set width to 100% */
    margin: auto;
    height: 50%;
    }
  .carousel-caption h3{
  color: #fff !important;
  font-size: 50px;
  text-shadow: 2px 2px 5px black;
  }
  .carousel-caption p{
    font-size: 30px;
    color: #fff !important;
    text-align: center;
    width: 100%;
    height: 10%;
    padding: 5%;
    background-color: black;
    opacity: 0.7;
  }

  @media (max-width: 600px) {
  .carousel-caption {
    display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
  }
}
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  #overlay {
  align: center;
  position: absolute;
  display: none;
  margin: 50px auto;
  width: 30%;
  max-width: 100%;
  height: 50%;
  padding: 20px;
  top: 100px;
  left: 100px;
  right: 100px;
  bottom: 100px;
  z-index: 2;
  cursor: pointer;
}

#text{
  position: absolute;
  font-size: 20px;
  color: black !important;
  margin: 1000px auto;
  width: 100%;
  max-width: 100%;
  height: 50%;
  padding: 20px;
  background: white;
  border-radius: 4px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, .3);
}
  </style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="logo\logo1.jpg" width="100" height="60">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="index.php">HOME</a></li>
        <li><a href="#">ABOUT US</a></li> -->
        <li><a href="login.php">Log In</a></li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>
<!-- style="height:50%" -->