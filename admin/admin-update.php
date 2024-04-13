<?php
include('../includes/db.php');

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

if(file_exists("../upload/". $_FILES['img']['name'])){
    $filename = $_FILES['img']['name'];
        $_SESSION['error'] = '<div class="alert alert-warning alert-dismissible fade show text-center">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Warning</strong>:Image Already Exits! 
      </div>';
        header("Location:./");
      exit();
  
  }
  $sql = "UPDATE admin_table  SET img = '$updatefile'";
$result = mysqli_query($connection, $sql);
move_uploaded_file($_FILES['img']['tmp_name'],"../upload/$newFileName");
unlink("../upload/".$old_img);
header("location:./");
exit();

?>