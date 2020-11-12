<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    $email="user";
    $password="password";
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        header("Location:registerr.php");
    }
    if(isset($_POST['email']) && isset($_POST['password'])){
        if ($_post['email'] == $email && $_POST['password'] == $password) {
            $_SESSION['loggedin']=true;
            header("Location: registerr.php");
       }
    }
   ?>
   <html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
   <form method="post" action="register.php">
        <div class="content">
        Username:<br><input type="text" name="email" id="email" placeholder="Email" require><br>
        Password:<br><input type="password" name="password" id="password" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
         title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br>
        <input type="submit" value="Login">
        <p style = "text-align:left;">Create new account
        <a href="registration.html">here</a>
        </p>
    </form>
</div>


</div>
</body>
</html>
