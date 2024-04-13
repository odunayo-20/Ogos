<?php
include("../includes/db.php");
// include("includes/boostrap.php");
session_start();

// query update for draft start
if (isset($_GET['draft'])) {
  $id_event = $_GET['draft'];
  $query = "UPDATE news SET status = 'drafted' WHERE id = '$id_event'";
  $result = mysqli_query($connection, $query);
  $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Success</strong>: Record Successfully Drafted! 
  </div>';

  header("Location:admin-news.php");
  exit();
}
// query update for draft stop

// query update for publish start

if (isset($_GET['publish'])) {
  $id_event = $_GET['publish'];

  $query = "UPDATE news SET status = 'published' WHERE id = '$id_event'";
  $result = mysqli_query($connection, $query);

  $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Success</strong>: Record Successfully Published! 
  </div>';

  header("Location:admin-news.php");
  exit();
}

// query update for publish stop



?>
