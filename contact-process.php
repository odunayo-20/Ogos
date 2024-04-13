<?php      
session_start();
error_reporting(0);
include("includes/db.php");
$name= htmlspecialchars($_POST['name']);
$email= htmlspecialchars($_POST['email']);
$subject= htmlspecialchars($_POST['subject']);
$message= htmlspecialchars($_POST['message']);

$date= date('Y/m/d H:iA');
// $time=time('h:iA');

if(empty($name) || empty($email) || empty($subject) || empty($message)){
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: All Flieds Should be fill! 
    </div>';
    
    include("contact.php");
    exit();
}

$sql="INSERT INTO contact (name,email,subject,message,date) VALUES('$name','$email','$subject','$message','$date')";

mysqli_query($connection,$sql);

$_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Successfully</strong>: Contact is successfully Submitted! 
</div>';


header("location:contact.php");
exit();






?>