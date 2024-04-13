<?php
include("../includes/db.php");
error_reporting(0);
session_start();

$id = $_POST['id'];
$name = $_POST['student_name'];
$subject = $_POST['subject'];
$class = $_POST['class'];
$date = date('Y/m/d H:i:s');

// $document = $_FILES['document'];
if(empty($name)){
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Warning</strong>: All Fields are required! 
  </div>';
  
  include_once("assign-submit.php");
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
    
    // header("Location: admin-event");
    require_once("assign-submit.php");
    exit();
    
  }

// $query = "INSERT INTO submit_assign (name, class, subject, document, submitted_at) VALUES('$name','$class','$subject','$doc','$date')";

$query = "UPDATE assignment SET student_name = '$name', doc_submitted = '$doc', submitted_at = '$date' WHERE id = '$id'";
$result = mysqli_query($connection,$query);
move_uploaded_file($_FILES['document']['tmp_name'], "../upload/$newFileInfo");

$_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Success</strong>: Record is Successfully Created! 
</div>';

header("Location: submit-record.php");
exit();
?>