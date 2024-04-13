<?php
include("../includes/db.php");
// error_reporting(0);
session_start();

$staff_name = htmlspecialchars($_POST['staff_name']);
$date = htmlspecialchars($_POST['date']) ;
$time = htmlspecialchars($_POST['time']) ;
$subject = htmlspecialchars($_POST['subject']) ;
$class = htmlspecialchars( $_POST['class']);
$status = htmlspecialchars( $_POST['status']);

// $document = $_FILES['document'];
if(empty($staff_name) || empty($subject) || empty($date) || empty($time) || empty($class)){
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Warning</strong>: All Fields are required! 
  </div>';
  
  require_once("assign-add.php");
  exit();
  
  }
  
  if($status == "--SELECT STATUS--"){
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Status Should be Selected! 
    </div>';
    
    require_once("assign-add.php");
    exit();
    
  }
  
  if($status == "--SELECT CLASS--"){
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Class Should be Selected! 
    </div>';
    
    require_once("assign-add.php");
    exit();
    
  }
  
  
  
  
  $document = $_FILES['document']['name'];
  $tmp_name = $_FILES['document']['tmp_name'];
  $newFiles = pathinfo($_FILES['document']['name']);
  $newFileInfo = $newFiles['filename'].'_'. time().'.'. $newFiles['extension'];
  
  $doc = 'upload/'.$newFileInfo;
  if(empty($tmp_name)){
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Image Should be Choose! 
    </div>';
    
    require_once("assign-add.php");
    exit();
    
  }

$query = "INSERT INTO assignment (staff_name,class,document,subject,dateS,status, timeP) VALUES('$staff_name','$class','$doc','$subject','$date','$status', '$time')";
$result = mysqli_query($connection,$query);
move_uploaded_file($_FILES['document']['tmp_name'], "../upload/$newFileInfo");

$_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Success</strong>: Record is Successfully Created! 
</div>';

header("Location: assign.php");
exit();
?>