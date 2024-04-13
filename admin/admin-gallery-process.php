<?php 
include("../includes/db.php");
session_start();
error_reporting(0);

$category = htmlspecialchars($_POST['category']) ;

$img_name = $_FILES['pic']['name'];
$img_tmp = $_FILES['pic']['tmp_name'];

if(empty($img_tmp)){
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Choose Image! 
    </div>';
    
    require_once("admin-gallery-add.php");
    exit();
    
}
if($category =="---Choose category---"){
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Choose From Category! 
    </div>';
    
    require_once("admin-gallery-add.php");
    exit();
    
}

$fileInfo = pathinfo($_FILES['pic']['name']);
$newFileName = $fileInfo['filename'].'_'.time().'.'. $fileInfo['extension'];
$pic = "upload/".$newFileName;

$query = "INSERT INTO gallery (category,gallery_img ) VALUES('$category','$pic')";

$result = mysqli_query($connection, $query);

move_uploaded_file($_FILES['pic']['tmp_name'],"../upload/$newFileName");


if(!$result){
    die("SERVER BUSY".mysqli_error($connection));
}else{
    // $message = "SUCCESSFUL";
    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Successfully</strong>: Record is successfully created! 
    </div>';

    header("Location:admin-gallery.php");
    exit();
}
?>