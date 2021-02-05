<?php
session_start();
include_once("dbconnect.php");
$name = $_GET['name'];
$email= $_GET['email'];

    $sql = "SELECT * FROM user INNER JOIN login ON user.matric = performance.matric WHERE email = '$email'";    
$stmt = $conn->prepare($sql );



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    .fakeimg {
        height: 200px;
        background: #aaa;
    }

    h2 {
        font-family: Cinzel, serif;
        font-size: 30px;
    }
    </style>
</head>

<body>

    <!-- <div class="jumbotron text-center" style="margin-bottom:0">
  <h1>My First Bootstrap 4 Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div> -->

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="blog.php?email=<?php echo $email. '&name='.$name?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mainpage.php?email=<?php echo $email. '&name='.$name?>">Back</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-4">
                <h5>Photo of me:</h5>
                <div><img src="profileimages/<?php echo $email?>.jpg" style="width:100%"></div>
                <table>
                    <tr>
                        <td> Name : <?php echo $name?> </td>
                    </tr>
                    <tr>
                        <td> Email : <?php echo $email?> </td>
                    </tr>
                </table>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <hr class="d-sm-none">
            </div>
            <div class="col-sm-8">
                <h2>Sport Performance Indicator</h2>
                <h5> Title for gmbar </h5>
                <div class="fakeimg">Fake Image</div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco.</p>

                
            </div>
        </div>
    </div>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <p>Nurul Alyani Fatini binti Khalid (263165)<br>
            <a href="mailto:alyanifatini98@gmail.com">alyanifatini98@gmail.com</a>
        </p>

    </div>

</body>

</html>