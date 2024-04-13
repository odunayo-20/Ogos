<?php 
session_start();
include("../includes/db.php");
error_reporting(0);


$id = htmlspecialchars($_POST['id']);
$category = htmlspecialchars($_POST['category']) ;
$old_pic = htmlspecialchars($_POST['old_pic']) ;
$img_name = $_FILES['pic']['name'];
$img_tmp = $_FILES['pic']['tmp_name'];


$fileInfo = pathinfo($_FILES['pic']['name']);
$newFileName = $fileInfo['filename'].'_'.time().'.'.$fileInfo['extension'];
$pic = "upload/".$newFileName;

if($img_name != ''){
  $update_filename = $pic;
}else{
  $update_filename = $old_pic;
}

$query = "UPDATE gallery SET category = '$category', gallery_img = '$update_filename' WHERE id = '$id'";

$result = mysqli_query($connection, $query);


if(!$result){
  die("SERVER BUSY".mysqli_error($connection));
}else{
  // if($img_name !=''){
  
    move_uploaded_file( $_FILES['pic']['tmp_name'],"../upload/$newFileName");
    // unlink("../upload/".$old_pic);
    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Success</strong>: Record Successfully Updated! 
    </div>';
    header("Location:admin-gallery.php");
    exit();
  // }
}
?>