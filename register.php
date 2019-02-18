<?php
        session_start();
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/14/19
 * Time: 10:21 AM
 */

//Connect to DB
$db= mysqli_connect("localhost","root","","authentication");
    if(isset($_POST['btnregister'])){
        session_start();
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        if ($password=$password2){
                //User created
            $password= md5($password);
                //hash password before storing for security reasons
            $insert = mysqli_query($db ,"INSERT INTO `users`(id`, `username`, `email`, `password`) VALUES (null,'$username','$email','$password')");
            $_SESSION['message']="You are now logged in";
            $_SESSION['username']= $username;
            header("location:home.php");
            //redirect to home
        }else{
                //Failed
            $_SESSION['message']="The two passwords do not match";
        }
    }


?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register, login and logout user php mysql</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
        <h1>Register, login and logout php mysql</h1>
    </div>
    <?php
    if(isset($_SESSION['message'])){
        echo "<div id='error_msg'>"."</div>";
        unset($_SESSION['message']);
    }
    ?>
    <form action="register.php" method="POST">
        <table class="table table-hover table-dark">
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" class="textInput"> </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" class="textInput"> </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" class="textInput"> </td>
            </tr>
            <tr>
                <td>Password again:</td>
                <td><input type="password" name="password2" class="textInput"> </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btnregister" value="Register" class="btn-primary"> </td>
            </tr>
        </table>
    </form>
</body>
</html>