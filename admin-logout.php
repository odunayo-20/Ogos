<?php

session_start();
include("includes/db.php");
// $_SESSION['username'] = null;
// $_SESSION['img'] = null;

session_destroy();
session_abort();
header("location:admin-login.php");
exit();
