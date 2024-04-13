<?php
include("../includes/db.php");
session_start();
error_reporting(0);

$id = htmlspecialchars($_POST['id']) ;

$name = htmlspecialchars($_POST['name']) ;
$date = htmlspecialchars($_POST['date']) ;
$time = htmlspecialchars($_POST['time']) ;
$subject = htmlspecialchars($_POST['subject']) ;
$class = htmlspecialchars($_POST['class']) ;
$status = htmlspecialchars($_POST['status']) ;
$old_document = htmlspecialchars($_POST['old_document']) ;

// $document = $_FILES['document'];


$document = $_FILES['document']['name'];
$tmp_name = $_FILES['document']['tmp_name'];
$newFiles = pathinfo($_FILES['document']['name']);
$newFileInfo = $newFiles['filename'].'_'. time().'.'. $newFiles['extension'];

$doc = 'upload/'.$newFileInfo;

if($old_document != ''){
    $updatefile = $doc;
}else{
    $updatefile = $old_document;
}


// if(file_exists("../upload/".$_FILES['document']['name'])){

//     $filename = $_FILES['document']['name'];
//     $_SESSION['error'] = '<div class="alert alert-warning alert-dismissible fade show text-center">
//     <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//     <strong>Warning</strong>:Document Already Exits! 
//     </div>';
//       header("Location:assign-record.php");
//     exit();

// }
// $query = "INSERT INTO assignment (name,class,document,subject,dateS,status) VALUES('$name','$class','$doc','$subject','$date','$status')";

$query = "UPDATE assignment SET name = '$name', class = '$class', document = '$updatefile', subject = '$subject', dateS = '$date', status = '$status' WHERE id = '$id'";
$result = mysqli_query($connection,$query);
move_uploaded_file($_FILES['document']['tmp_name'], "../upload/$newFileInfo");
// unlink("../upload/".$old_document);

$_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Success</strong>: Record is Successfully Updated! 
</div>';

header("Location: assign-record.php");
exit();
?>