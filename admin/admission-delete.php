<?php

include("../includes/db.php");
session_start();

// if(isset($_POST['admission_delete'])){
//     $id = $_POST['admission_id'];
//     $img = $_POST['admission_img'];

$id = $_GET['id'];

    $query = "DELETE FROM admission WHERE id = '$id'";
    $deleteAdmission = mysqli_query($connection,$query);
unlink("../upload/".$img);
if(!$deleteAdmission){
    die("busy server". mysqli_error($connection));
}else{
    // $message = "Staff information successfully deleted";
    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Successfully</strong>: Record is successfully Deleted! 
</div>';

header("Location: admission.php");
exit();
}

// }


?>