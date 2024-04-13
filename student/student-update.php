<?php 
include('../includes/db.php');

$id = $_POST['id'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$old_img = $_POST['old_img'];

$img_name = $_FILES['img']['name'];
$img_tmp = $_FILES['img']['tmp_name'];
$fileInfo = pathinfo($_FILES['img']['name']);
$newFileName = $fileInfo['filename'].'_'.time().'.'.$fileInfo['extension'];
$pic = "upload/".$newFileName;

if($img_name != ''){
    $updatefile = $pic;
}else{
    $updatefile = $old_img;
}




$query =  "UPDATE student SET email = '$email', phone = '$phone', img = '$updatefile', location = '$location' WHERE student_id = '$id'";
$result = mysqli_query($connection, $query);
move_uploaded_file($_FILES['img']['tmp_name'],"../upload/$newFileName");
unlink("../upload/". $old_img);
header("location: ./");
exit();


?>