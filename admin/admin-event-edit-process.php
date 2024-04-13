<?php 
session_start();
error_reporting(0);

include("../includes/db.php");

// $idd = $_GET['id'];
$id = htmlspecialchars($_POST['id']) ;
$old_img = htmlspecialchars($_POST['old_img']) ;
$title = htmlspecialchars($_POST['title']) ;
$message = htmlspecialchars($_POST['message']) ;
$location = htmlspecialchars($_POST['location']) ;
$date = htmlspecialchars($_POST['date']) ;
$post_name = htmlspecialchars($_POST['poster_name']) ;
$time = htmlspecialchars( $_POST['time']);
$status = htmlspecialchars($_POST['status']) ;
$tag = htmlspecialchars( $_POST['tag']);

$img_name = $_FILES['img']['name'];
$img_tmp = $_FILES['img']['tmp_name'];

$fileInfo = pathinfo($_FILES['img']['name']);
$newFileName = $fileInfo['filename'].'_'.time().'.'. $fileInfo['extension'];
$pic = "upload/".$newFileName;

if($img_name != ''){
    $update_image = $pic;
}else{
    $update_image = $old_img;
}

// if($_FILES['img']['name'] != ''){
// if(file_exists("../upload/". $_FILES['img']['name'])){
// $filename = $_FILES['img']['name'];

// $_SESSION['error'] = '<div class="alert alert-warning alert-dismissible fade show text-center">
// <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
// <strong>Warning</strong>:Image Already Exits! 
// </div>';
//   header("Location:admin-event-record.php");
//   exit();
// }

// }



$query = "UPDATE event SET event_title = '$title', event_message = '$message', event_img = '$update_image', event_time = '$time', event_date = '$date', event_location = '$location', event_status = '$status', event_tag = '$tag', event_poster_name = '$post_name' WHERE id = '$id'";

$result = mysqli_query($connection, $query);

// if($_FILES['img']['name'] != ''){
move_uploaded_file( $_FILES['img']['tmp_name'],"../upload/$newFileName");
// unlink("../upload/".$old_img);
// }
if(!$result){
    die("SERVER BUSY".mysqli_error($connection));
}else{
    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Successfully</strong>: Record is successfully Updated! 
    </div>';
    header("Location:admin-event.php");
    exit();
}
?>