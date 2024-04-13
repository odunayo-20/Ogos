<?php

include("../includes/db.php");
session_start();

$id = $_GET['id'];

$query = "DELETE FROM contact WHERE id = '$id'";
$deleteStaff = mysqli_query($connection,$query);

if(!$deleteStaff){
    die("busy server". mysqli_error($connection));
}else{
    // $message = "Staff information successfully deleted";
    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Successfully</strong>: Record is successfully Deleted! 
</div>';

    header("Location: contact-record.php");
    exit();
}



?>