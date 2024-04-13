<?php
include('../includes/db.php');
session_start();

$id = $_GET['id'];

$query = "DELETE FROM subject WHERE id = $id";
$delete = mysqli_query($connection, $query);

if(!$delete){
die(mysqli_error($connection));
}else{
    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Successfully</strong>: Subject Record is successfully deleted! 
    </div>';

    header('location: subject.php');
    exit();
}

?>