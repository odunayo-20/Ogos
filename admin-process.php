<?php
SESSION_START();
 error_reporting(0);
require_once("includes/db.php");

$login_username = mysqli_real_escape_string($connection, $_POST['username']);
$login_password = mysqli_real_escape_string($connection, $_POST['password']);
        
if(empty($login_username)){
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Username Field Can not be empty 
    </div>';
    // header('location: admin-login');
    
//     $error_msg= "Username Field Can not be empty";
include('admin-login.php');
exit();
}
elseif(empty($login_password)){
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Password Field Can not be empty 
    </div>';

    // header('location: admin-login');
    
//     $error_msg = "Password Field Can not be empty";
include('admin-login.php');
exit();
}else{
//$login_password1=md5($login_password);
$query = " SELECT * FROM `admin_table` WHERE username = '{$login_username}' AND password = '{$login_password}' ";
$run_query = mysqli_query($connection, $query);
            
if(mysqli_num_rows($run_query) > 0){
                
while($result = mysqli_fetch_assoc($run_query)){
$id = $result['admin_id'];
$img = $result['img'];
$username = $result['username'];
$_SESSION['admin_id'] = $id;
$_SESSION['img'] = $img;
$_SESSION['username'] = $username;
                    
header("Location:admin/");
exit();
}
}else{
// $error_msg = "Wrong Login Details!";
$_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Warning</strong>: Wrong Login Details! 
</div>';

// header('location: admin-login');
include('admin-login.php');

exit();
}
}
//}
 
?>