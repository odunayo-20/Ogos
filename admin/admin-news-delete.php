<?php

include("../includes/db.php");
session_start();

// if(isset($_POST['news_delete'])){
//     $id = $_POST['news_id'];
//     $img = $_POST['news_img'];
    $id = $_GET['id'];
    
    $query = "DELETE FROM news WHERE id = '$id'";
$result = mysqli_query($connection,$query);

// unlink("../upload/".$img);
$_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Success</strong>: Record is Successfully Deleted! 
</div>';

header("Location: admin-news.php");
exit();


// }

?>