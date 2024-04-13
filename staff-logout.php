<?php
include("includes/db.php");
session_start();
session_destroy();

session_abort();

// if((time() - $_SESSION['remember']) > 300);
// if(isset($_COOKIE['username']) AND isset($_COOKIE['password'])){
//     setcookie("username", '', time() - (3600));
//     setcookie("password", '', time() - (3600));
// }
header("location: staff-login.php");
exit();

