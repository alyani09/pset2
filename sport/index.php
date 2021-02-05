<?php
include_once("dbconnect.php");
include("indexcss.php"); 

 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    /* Style inputs */
    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    /* Style the container/contact section */
    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 10px;
    }

    /* Create two columns that float next to eachother */
    .column {
        float: right;
        width: 50%;
        margin-top: 6px;
        padding: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .container {
        position: relative;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 40px 0 60px 0;
    }

    /* style inputs and link buttons */
    input,
    .btn {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 4px;
        margin: 5px 0;
        opacity: 0.85;
        display: inline-block;
        font-size: 17px;
        line-height: 20px;
        text-decoration: none;
        /* remove underline from anchors */
    }

    input:hover,
    .btn:hover {
        opacity: 1;
    }


    /* style the submit button */
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    /* Two-column layout */
    .col {
        float: center;
        width: 50%;
        margin: auto;
        padding: 0 50px;
        margin-top: 6px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* vertical line */
    .vl {
        position: absolute;
        left: 50%;
        transform: translate(-50%);
        border: 2px solid #ddd;
        height: 175px;
    }

    /* text inside the vertical line */
    .vl-innertext {
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        background-color: #f1f1f1;
        border: 1px solid #ccc;
        border-radius: 50%;
        padding: 8px 10px;
    }

    /* hide some text on medium and large screens */
    .hide-md-lg {
        display: none;
    }

    /* bottom container */
    .bottom-container {
        text-align: center;
        background-color: #666;
        border-radius: 0px 0px 4px 4px;
    }

    /* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 650px) {
        .col {
            width: 100%;
            margin-top: 0;
        }

        /* hide the vertical line */
        .vl {
            display: none;
        }

        /* show the hidden text on small screens */
        .hide-md-lg {
            display: block;
            text-align: center;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .column,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }

            .img {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
        }
    }
    </style>
</head>

<body><br><br><br>
    <div style="text-align:center">
        <h1><b>Sport Performance Indicator</b></h1>

    </div>


    <div class="row" style="text-align:center">
        <div class="column" style="text-align:center">
            <div class='main-content row'>
                <div class='col-md-5 col-md-offset-1'>
                    <div class='text-align:center devices-image'>
                        <img src="logo\logo2.jpg" style="width:50%;">

                    </div>

                    <form action="login.php" method="POST">
                        <input type="text" name="email" placeholder="Email" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <input type="submit" value="Login">
                        <p align="center">Not Register?<a href="register.html"> Register</a></p>
                    </form>
                </div>
            </div>
            <!-- <div class="container"> -->

        </div>
    </div>


</body>

</html>
