<?php
include('../includes/db.php');
session_start();

$id = htmlspecialchars($_POST['id']);
$class = htmlspecialchars($_POST['class']);
$subject = htmlspecialchars($_POST['subject']);
$status = htmlspecialchars($_POST['status']);
$created_at = date('Y/m/d H:i:s');



$query = "UPDATE assign_subject SET class = '$class', subject = '$subject', status = '$status', created_at = '$created_at' WHERE id = '$id'";
$result = mysqli_query($connection,$query);

    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Successfully</strong>: Record is successfully Updated! 
    </div>';
    header('location:assign-subject.php');
    exit();
    


?>