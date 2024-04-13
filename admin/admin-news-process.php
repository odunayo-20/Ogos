<?php      
session_start();
include("../includes/db.php");
error_reporting(0);
// include("includes/boostrap.php");
$title= htmlspecialchars($_POST['title']);
$subtitle= htmlspecialchars($_POST['subtitle']);
$summary= htmlspecialchars($_POST['summary']);
$content= htmlspecialchars($_POST['content']);
$date= htmlspecialchars($_POST['date']) ;
$time= htmlspecialchars($_POST['time']);
$status= htmlspecialchars($_POST['status']);

if(empty($title) || empty($content) || empty($summary) || empty($date) || empty($time) || empty($status) || empty($subtitle)){
  $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Warning</strong>: All Fields are required! 
</div>';

require_once("admin-news-add.php");
exit();

}

if($status == "--Select Status--"){
  $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Warning</strong>: Status Should be Selected! 
  </div>';
  
  // header("Location: admin-event");
  require_once("admin-news-add.php");
  exit();
  
}


$pic_tmp =$_FILES['pic']['tmp_name'];
$pic_name=$_FILES['pic']['name'];
$pic_type = $_FILES['pic']['type'];
$pic_size = $_FILES['pic']['size'];

$t = time();
$newPic = $t."_".$pic_name;
$folder="upload/".$newPic;
if(empty($pic_tmp)){
  $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Warning</strong>: Image Field Should not be empty! 
  </div>';
  
  // header("Location: admin-event");
  require_once("admin-news-add.php");
  exit();

}

$sql="INSERT INTO news (title,subtitle,summary,pic,content,date,time,status) VALUES('$title','$subtitle','$summary','$folder','$content','$date','$time','$status')";

$result = mysqli_query($connection,$sql);

move_uploaded_file($_FILES['pic']['tmp_name'],"../upload/$newPic");
// move_uploaded_file( $_FILES['img']['tmp_name'],"event-upload/$newFileName");



if(!$result){
  die("SERVER BUSY".mysqli_error($connection));
}else{
  // $message = "SUCCESSFUL";
  // header("Location:admin-news");
  $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Successfully</strong>: Record is successfully created! 
  </div>';
  header("Location:admin-news.php");

  exit();
}


// header("include/admin-news-record.php");
//   exit();

// echo "admin-news.php";








?>