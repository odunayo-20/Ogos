<?php

include("includes/db.php");
session_start();
// error_reporting(0);
?>

<?php 

$serial = mysqli_real_escape_string($connection,$_POST['serial']);
$pin = mysqli_real_escape_string($connection,$_POST['pin']);

if(empty($serial) || empty($pin)){
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Fields Should not be empty! 
    </div>';
  
    include("student-pin-auth.php");
    exit();

}
// query to check for serial pin exist start
$SerialQuery = "SELECT * FROM student WHERE serial = '$serial'";
$SerialCheck = mysqli_query($connection,$SerialQuery);

if(mysqli_num_rows($SerialCheck) == 1){
    // $message = "This Serial number has already exist";
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: This Serial number has already exit! 
    </div>';  
    header("Location:student-pin-auth.php");
    exit();
}


$query = "SELECT * FROM pin_table WHERE pin = '$pin' AND serial = '$serial'";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result)== 1){

    $sql = "SELECT pin,id,serial FROM pin_table";
    $Resultseriel = mysqli_query($connection,$sql);
    if(mysqli_num_rows($Resultseriel)>0){
        $group = mysqli_fetch_all($Resultseriel,MYSQLI_ASSOC);
        $_SESSION['serial'] = $group;
        $_SESSION['id'] = $group;
    }
    $data = mysqli_fetch_array($result);
    $_SESSION['id'] = $data['id'];
    $_SESSION['serial'] = $data['serial'];
    $_SESSION['data'] =$data;
    header("Location:student-form.php");
}else{
    // $message ="Wrong input";
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Wrong input! 
    </div>';
  
    header("location: student-pin-auth.php");
    exit();
}



?>