<?php
include('../includes/db.php');
session_start();

$class = $_POST['class'];
$subject = htmlspecialchars($_POST['subject']);
$status = htmlspecialchars($_POST['status']);
$created_at = date('Y/m/d H:i:s');


$query = "INSERT INTO assign_subject (class, subject, created_at) VALUES('$class', '$subject', '$created_at')";
$result = mysqli_query($connection,$query);

    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Successfully</strong>: Record is successfully created! 
    </div>';
    header('location:assign-subject.php');
    exit();
    


?>