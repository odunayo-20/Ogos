<?php
include("../includes/db.php");

session_start();
$time = date('H:i');
// $time = time() + 3600 * 6;
// query update for draft start
if (isset($_GET['draft'])) {
  $id_event = $_GET['draft'];
  $query = "UPDATE assignment SET status = 'drafted' WHERE id = '$id_event'";
  $result = mysqli_query($connection, $query);

  $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Successfully</strong>: Record is successfully Drafted! 
  </div>';
  
  header("Location:assign.php");
  exit();
}
// query update for draft stop

// query update for publish start

if (isset($_GET['publish'])) {
  $id_event = $_GET['publish'];

  $query = "UPDATE assignment SET status = 'published' WHERE id = '$id_event'";
  $result = mysqli_query($connection, $query);
  $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Successfully</strong>: Record is successfully Published! 
  </div>';
  header("Location:assign.php");
  exit();
}

// query update for publish stop



?>
