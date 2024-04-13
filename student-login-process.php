
<?php
error_reporting(0);
include("includes/db.php");
SESSION_START();

$login_username = mysqli_real_escape_string($connection, $_POST['username']);
$login_password = mysqli_real_escape_string($connection, md5($_POST['password']));
        
if(empty($login_username)){
// $error_msg= "Username Field Can not be empty";
// include('staff-login.php');
$_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Warning</strong>: Username Field Can not be empty 
</div>';
header('location: staff-login.php');

exit();
}
elseif(empty($login_password)){
// $error_msg = "Password Field Can not be empty";
// include('staff-login.php');
$_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Warning</strong>: Password Field Can not be empty! 
</div>';
header('location: staff-login.php');

exit();
}else{
//$login_password1=md5($login_password);
$query = " SELECT * FROM student WHERE username = '$login_username' OR email = '$login_username' AND password = '$login_password' ";
$run_query = mysqli_query($connection, $query);
            
if(mysqli_num_rows($run_query)){
                
while($row = mysqli_fetch_assoc($run_query)){
$id = $row['student_id'];
$username = $row['username'];
$img = $row['img'];
$password = $row['password'];
$_SESSION['student_id'] = $id;
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
$_SESSION['img'] = $img;
                    
// $_SESSION['success']="Account Successfully Created.Login Now!";

header("Location:student/");
exit();

}
}else{
// $error_msg = "Wrong Login Details!";
$_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Warning</strong>: Wrong Login Details! 
</div>';
header('location: student-login.php');

// include("staff-login.php");
exit();
}
}


// if(isset($_POST['remember'])){
//     setcookie('username', $result['username'], time() + (86400 * 30));
//     setcookie('password', $result['password'], time() + (86400 * 30));
// }
// $_SESSION['id'] + $result['id'];
// header('location: admin/staff-portal.php');
 
?>









