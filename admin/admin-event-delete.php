<?php

include("../includes/db.php");
session_start();

$id = $_GET['id'];


    $query = "DELETE FROM event WHERE id = '$id'";
    $result = mysqli_query($connection, $query);
;

    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Successfully</strong>: Record is successfully Deleted! 
</div>';

    header("Location: admin-event.php");
    exit();


?>
