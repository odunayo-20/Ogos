<?php
// error_reporting(0);
session_start();
 include("../includes/db.php");
 ?>


<?php
$datep = date("d-m-Y");
$year = date("Y");

$id = htmlspecialchars($_POST['id']) ;
$username = htmlspecialchars($_POST['username']) ;
$serial1 = htmlspecialchars( $_POST['serial']);
$firstname = htmlspecialchars($_POST['fname']) ;
$middlename = htmlspecialchars($_POST['mname']) ;
$lastname = htmlspecialchars( $_POST['lname']);
$gender = htmlspecialchars( $_POST['gender']);
$birth = htmlspecialchars( $_POST['dob']);
$state = htmlspecialchars($_POST['state']) ;
$town = htmlspecialchars( $_POST['town']);
$lga = htmlspecialchars($_POST['lga']) ;
$email = htmlspecialchars( $_POST['email']);
$phone = htmlspecialchars($_POST['phone']) ;
$address = htmlspecialchars( $_POST['address']);
$staff = htmlspecialchars( $_POST['staff']);
$year_employed = htmlspecialchars($_POST['year_employed']) ;




$old_img = $_POST['old_img'];
$img_name = $_FILES['img']['name'];
$img_tmp = $_FILES['img']['tmp_name'];

$fileInfo = pathinfo($_FILES['img']['name']);
$newFilename = $fileInfo['filename'].'_'.time().'.'. $fileInfo['extension'];
$pic = "upload/".$newFilename;

if($img_name != ''){
    $update_image = $pic;
}else{
    $update_image = $old_img;
}



    $query = "UPDATE staff SET username = '$username', img = '$update_image', serial = '$serial1', firstname = '$firstname', middlename = '$middlename', lastname ='$lastname', gender = '$gender', dob = '$birth', state = '$state', town = '$town', lg = '$lga', email = '$email', phone = '$phone', location = '$address', category = '$staff', year_employed = '$year_employed', datep = '$datep' WHERE staff_id = '$id'";

    $result = mysqli_query($connection, $query);

    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/$newFilename");
   
    if(!$result){
        die("SERVER BUSY".mysqli_error($connection));
    }else{
        $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Successfully</strong>: Profile is Successfully Updated! 
    </div>';

        header("location:admin-staff.php");
        // include("staff-form");
        exit();
    }
    




?>