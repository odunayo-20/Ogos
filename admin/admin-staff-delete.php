<?php

include("../includes/db.php");
session_start();

$id = $_GET['staff_id'];
// if(isset($_POST['staff_delete'])){
//     $id = $_POST['staff_id'];
//     $staff_img = $_POST['staff_img'];
    
    $query = "DELETE FROM staff WHERE staff_id = '$id'";
$deleteStaff = mysqli_query($connection,$query);
// unlink("../upload/".$staff_img);
if(!$deleteStaff){
    die("busy server". mysqli_error($connection));
}else{
    // $message = "Staff information successfully deleted";
    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Successfully</strong>: Record is successfully Deleted! 
</div>';

    header("Location: admin-staff.php");
    exit();
}




?>