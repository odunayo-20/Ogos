<?php 
session_start();
include("includes/db.php");
error_reporting(0);

$email = htmlspecialchars($_POST['email']);

$query = "SELECT * FROM staff";
$result = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($result)){
    $db_email = $row['email'];
    $id = $row['id'];
}

if($email == $db_email){

$to = "$email";
$from = "ogooluwaschools";
$sub = "Reset password link";
$message = "https://www.ogooluwaschools.com.ng/resetpassword.php?id=<?php echo $id;?>";

$send = mail($to, $from, $sub, $message);
if($send){
    // echo "Check your mail for reset password";
    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Success</strong>: Check your mail for reset password
    </div>';
    header("location:forgot-password.php");
    exit();

}else{
// echo "link cannot be send";
$_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Warning</strong>: link cannot be send 
</div>';
header("location:forgot-password.php");
exit();

}

    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Success</strong>: Email found 
    </div>';
    header("location:forgot-password.php");
    exit();

}else{
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Email not found! 
    </div>';
    header("location:forgot-password.php");
    exit();

}

?>