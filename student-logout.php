<?php

include("includes/db.php");

session_start();
session_destroy();
session_abort();

header('location: student-login.php');
exit();


?>