<?php 
include("../includes/db.php");
session_start();
error_reporting(0);

// $idd = $_GET['id'];
$id = htmlspecialchars($_POST['id']) ;
$title= htmlspecialchars($_POST['title']) ;
$subtitle= htmlspecialchars($_POST['subtitle']) ;
$summary= htmlspecialchars($_POST['summary']) ;
$content= htmlspecialchars($_POST['content']) ;
$date= htmlspecialchars($_POST['date']) ;
$time= htmlspecialchars($_POST['time']) ;
$status= htmlspecialchars( $_POST['status']);

$old_pic = htmlspecialchars($_POST['old_pic']);
$pic_tmp =$_FILES['pic']['tmp_name'];
$pic_name=$_FILES['pic']['name'];
$pic_type = $_FILES['pic']['type'];
$pic_size = $_FILES['pic']['size'];

$t = time();
$newPic = $t."_".$pic_name;
$folder="upload/".$newPic;

if($pic_name != ''){
    $update_pic = $folder;
}else{
    $update_pic = $old_pic;
}



$query = "UPDATE news SET title = '$title', subtitle = '$subtitle', summary = '$summary', content = '$content', date = '$date', time = '$time',  status = '$status', pic = '$update_pic' WHERE id = '$id'";

$result = mysqli_query($connection, $query);

move_uploaded_file( $_FILES['pic']['tmp_name'],"../upload/$newPic");
// unlink("../upload/".$old_pic);

if(!$result){
    die("SERVER BUSY".mysqli_error($connection));
}else{
    // $message = "SUCCESSFUL";
    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Success</strong>: Record is Successfully Updated! 
    </div>';

    header("Location:admin-news.php");
    exit();
}
?>