<?php  
error_reporting(0);    
session_start();

include("includes/db.php");
$surname= htmlspecialchars($_POST['surname']);
$othernames= htmlspecialchars($_POST['othernames']);
$email= htmlspecialchars($_POST['email']);
$gender= htmlspecialchars($_POST['gender']);
$nation= htmlspecialchars($_POST['nation']);
$state= htmlspecialchars($_POST['state']);
$town= htmlspecialchars($_POST['town']);
$dob= htmlspecialchars($_POST['dob']);
$branch= htmlspecialchars($_POST['branch']);
$section= htmlspecialchars($_POST['section']);
$phone= htmlspecialchars($_POST['phone']);
$class= htmlspecialchars($_POST['class']);
// $pic= htmlspecialchars()$_FILES['pic'];
$guardians_relationship= htmlspecialchars($_POST['relationship']);
$guardians_name= htmlspecialchars($_POST['guardians_name']);
$guardians_phone= htmlspecialchars($_POST['guardians_phone']);
$guardians_email= htmlspecialchars($_POST['guardians_email']);
$guardians_address= htmlspecialchars($_POST['guardians_address']);
$datep=date('d-m-y h:iA');

if(empty($surname) || empty($othernames) || empty($email) || empty($state) || empty($nation) || empty($state) || empty($town) || empty($dob) || empty($phone) || empty($guardians_address) || empty($guardians_name) || empty($guardians_phone) || empty($guardians_email)){
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Warning</strong>: All Fields are required! 
</div>';

require_once("admission.php");
exit();

}

if($gender == "--Select gender--"){
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Gender Should be Selected! 
    </div>';
    
    require_once("admission.php");
    exit();
    
}
if($branch == "--Select Location--"){
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Location Should be Selected! 
    </div>';
    
    require_once("admission.php");
    exit();
    
}
if($section == "--Select Section--"){
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Gender Should be Selected! 
    </div>';
    
    require_once("admission.php");
    exit();
    
}
if($guardians_relationship == "--Select Type--"){
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Relationship Type Should be Selected! 
    </div>';
    
    require_once("admission.php");
    exit();
    
}



$img_name = $_FILES['pic']['name'];
$img_tmp = $_FILES['pic']['tmp_name'];
$fileInfo = pathinfo($_FILES['pic']['name']);
$newFileName = $fileInfo['filename'].'_'.time().'.'.$fileInfo['extension'];
$pic = "upload/".$newFileName;


if(empty($img_tmp)){
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Image Should be Choose! 
    </div>';
    
    require_once("admission.php");
    exit();
    
}

$query = "SELECT * FROM admission WHERE email = '$email'";
$check = mysqli_query($connection, $query);
    if(mysqli_num_rows($check) > 0){
        $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Warning</strong>: Email has already exit! 
        </div>';
        
        require_once("admission.php");
        exit();
    
}


$sql="INSERT INTO admission( surname,othernames,email,gender,nation,state,town,dob,branch,section,phone,class,pic,relationship,guardians_name,guardians_phone,guardians_email,guardians_address,dateposted ) VALUES('$surname','$othernames','$email','$gender','$nation','$state','$town','$dob','$branch','$section','$phone','$class','$pic','$guardians_relationship','$guardians_name','$guardians_phone','$guardians_email','$guardians_address','$datep')";

mysqli_query($connection,$sql);

move_uploaded_file($_FILES['pic']['tmp_name'],"upload/$newFileName");

$_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Successfully</strong>: Record is successfully created! 
</div>';
header("Location: admission.php");
// echo include "admission.php";
exit();








?>