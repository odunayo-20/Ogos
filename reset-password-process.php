<?php 
include('includes/db.php');
error_reporting(0);

session_start();
$id = htmlspecialchars($_GET['id']) ;
$pass = htmlspecialchars(md5($_POST['pass'])) ;
$Cpass = htmlspecialchars(md5($_POST['Cpass'])) ;

if($pass == $Cpass){
$query = "UPDATE staff SET password = '$pass' WHERE id = '$id'";
$result = mysqli_query($connection, $query);

$_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Success</strong>: Password successfully changed!
</div>';
header("location:reset-password.php");
exit();

}else{
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Warning</strong>: please enter same password! 
</div>';
header("location:reset-password.php");
exit();

}

?>