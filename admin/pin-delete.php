<?php
include('../includes/db.php');
session_start();
    $id = $_GET['id'];
$query = "DELETE FROM pin_table WHERE id = '$id'";
$deleted = mysqli_query($connection,$query);
if(!$deleted){
    die("busy server" .mysqli_error($connection));
}else{
    // $message = "sucessfully deleted";
    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Successfully</strong>: Record is successfully Deleted! 
    </div>';

    header("Location: pin.php");
    exit();
}


?>