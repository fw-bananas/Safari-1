<?php
session_start();
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/14/19
 * Time: 10:21 AM
 */
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
<h1>HOME</h1>
<div><h4>Welcome <?php echo $_SESSION['username'];?></h4></div>
<div><a href="logout.php">Logout</a></div>
</body>
</html
