<?php 
include("../includes/db.php");
error_reporting(0);
session_start();

$title = htmlspecialchars($_POST['title']) ;
$message = htmlspecialchars($_POST['message']) ;
$location = htmlspecialchars($_POST['location']) ;
$date = htmlspecialchars($_POST['date']) ;
$time = htmlspecialchars($_POST['time']) ;
$status = htmlspecialchars($_POST['status']) ;
$post_name = htmlspecialchars($_POST['poster_name']) ;
// $tag = htmlspecialchars() $_POST['tag'];

if(empty($title) || empty($message) || empty($location) || empty($date) || empty($time) || empty($status) || empty($post_name)){
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Warning</strong>: All Fields are required! 
</div>';

require_once("admin-event-add.php");
exit();

}

if($status == "--Select Status--"){
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Status Should be Selected! 
    </div>';
    
    // header("Location: admin-event");
    require_once("admin-event-add.php");
    exit();
    
}

$img_name = $_FILES['img']['name'];
$img_tmp = $_FILES['img']['tmp_name'];

$fileInfo = pathinfo($_FILES['img']['name']);
$newFileName = $fileInfo['filename'].'_'.time().'.'. $fileInfo['extension'];
$pic = "upload/".$newFileName;

$query = "INSERT INTO event (event_title, event_message, event_img, event_time, event_date, event_location, event_status, event_tag, event_poster_name) VALUES('$title','$message', '$pic', '$time', '$date', '$location', '$status','$tag', '$post_name')";

$result = mysqli_query($connection, $query);

move_uploaded_file( $_FILES['img']['tmp_name'],"../upload/$newFileName");

if(!$result){
    die("SERVER BUSY".mysqli_error($connection));
}else{
    // $message = "SUCCESSFUL";
    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Successfully</strong>: Record is successfully created! 
    </div>';
    header("Location:admin-event.php");
    exit();
}
?>