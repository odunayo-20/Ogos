<?php
include('../includes/db.php');
session_start();

$name = htmlspecialchars($_POST['name']);
$status = htmlspecialchars($_POST['status']);
$created_at = date('Y/m/d H:i:s');

if (empty($name)) {
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Warning</strong>: Name Fields is required! 
</div>';
header('location: class-add.php');
exit();
}

$query = "INSERT INTO class (name, status, created_at) VALUES('$name', '$status', '$created_at')";
$result = mysqli_query($connection,$query);

    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Successfully</strong>: Class Record is successfully created! 
    </div>';
    header('location:class.php');
    exit();
    


?>