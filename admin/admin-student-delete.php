<?php

include("../includes/db.php");
session_start();

$id = $_GET['id'];

$query = "DELETE FROM student WHERE student_id = '$id'";
$deletestudent = mysqli_query($connection,$query);
// unlink("../upload/".$student_img);
if(!$deletestudent){
    die("busy server". mysqli_error($connection));
}else{
    // $message = "student information successfully deleted";
    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Successfully</strong>: Record is successfully Deleted! 
</div>';

    header("Location: admin-student.php");
    exit();
}




?>