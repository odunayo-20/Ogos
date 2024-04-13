<?php

session_start();
include_once('../includes/db.php');


$idd = htmlspecialchars($_POST['idd']);
$name = htmlspecialchars($_POST['name']);
$status = htmlspecialchars($_POST['status']);
$created_at = date('Y/m/d H:i:s');



$query = "UPDATE subject SET name= '$name', status = '$status', created_at = '$created_at' WHERE id = '$idd'";
$result = mysqli_query($connection, $query);

if(!$result){
    die(mysqli_error($connection));
}else{
    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Successfully</strong>: Record is successfully Updated! 
</div>';

    header('Location:subject.php');
    exit();
}

?>