<?php

include("../includes/db.php");
session_start();

$id = $_GET['delete'];
// if(isset($_POST['assign_delete'])){
//     $id = $_POST['assign_id'];
//     $assign_doc = $_POST['assign_doc'];
// }

$query = "DELETE FROM assignment WHERE id = '$id'";
$result = mysqli_query($connection,$query);
// unlink("../upload/".$assign_doc);
$_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Success</strong>: Record is Successfully Deleted! 
</div>';

header("Location: assign.php");
exit();



?>