<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/15/19
 * Time: 10:03 AM
 */
session_start();
session_destroy();
unset($_SESSION['username']);
$_SESSION['message'] = "You are now logged out";
header("location: login.php");


?>