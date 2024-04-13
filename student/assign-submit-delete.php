<?php

include("../includes/db.php");
session_start();

$id = $_GET['id'];

$query = "DELETE FROM submit_assign WHERE id = '$id'";
$result = mysqli_query($connection,$query);
$_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Success</strong>: Record is Successfully Deleted! 
</div>';

header("Location: submit-record.php");
exit();



?>