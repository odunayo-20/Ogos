<?php include("includes/header.php"); ?>
<?php error_reporting(0); 
session_start();
?>

<div class="loader"></div>
<!-- navigation bar start -->
<?php include("includes/navbar.php"); ?>
<!-- navigation bar stop -->

<!-- sidebar start -->
<?php include("includes/sidebar.php"); ?>
<!-- sidebar stop -->

<!-- Main Content start -->
<div class="main-content">
  <!-- section start -->
  <section class="section">
    <div class="section-body">
      <!-- add content start here -->

      <div class="row">
      <div class="col-12 my-2">
                    <a href="admin-event-add.php" class="btn btn-primary" style="float: right;">Add Event</a>
                </div>

        <div class="col-12">
        <?php 
                if(isset($_SESSION['success'])){
                  echo('<p style="color: green">'.$_SESSION['success']."</p>");
                  unset($_SESSION['success']);
                }
                if(isset($_SESSION['error'])){
                  echo('<p style="color: red">'.$_SESSION['error']."</p>");
                  unset($_SESSION['error']);
                }
                ?>

          <div class="card">
            <div class="card-header">

              <h4>Event Record Table</h4>

              <div class="card-header-form">
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                      <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- <div class="card-body p-0"> -->


            <?php
            $limit = 5;

            if (isset($_GET['pageid'])) {

              $pagenumber = $_GET['pageid'];
              $start = ($pagenumber - 1) * $limit;
              $sql = ("SELECT * FROM event order by id desc LIMIT $start, $limit");
              $result = mysqli_query($connection, $sql);
            } else {
              $start = 0;
              $sql = ("SELECT * FROM event order by id desc LIMIT $start, $limit");
              $result = mysqli_query($connection, $sql);
            }

            // $row['id'];
            ?>
            <!-- query to check for staff count start -->
            <?php

            $query = "SELECT * FROM event";
            $Event = mysqli_query($connection, $query);

            $eventCount = mysqli_num_rows($Event);

            // not teaching staff start
            // $query = "SELECT * FROM event WHERE event_status = 'pending'";
            // $pending = mysqli_query($connection, $query);
            // $pendingCount = mysqli_num_rows($pending);
            // not teaching staff stop

            // not teaching staff start
            $query = "SELECT * FROM event WHERE event_status = 'drafted'";
            $draft = mysqli_query($connection, $query);
            $draftCount = mysqli_num_rows($draft);
            // not teaching staff stop



            // teaching staff query start
            $query = "SELECT * FROM event WHERE event_status = 'published'";
            $publish = mysqli_query($connection, $query);
            $publishCount = mysqli_num_rows($publish);
            // teaching staff query stop


            ?>
            <!-- query to check for staff count stop -->
            <div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">All <span class="badge badge-white"><?php echo $eventCount ?></span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Publish <span class="badge badge-primary"><?php echo $publishCount ?></span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Draft <span class="badge badge-primary"><?php echo $draftCount ?></span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>


            <div class="card-body">
              <div class="table-responsive">
                <table id="mainTable" class="table table-striped">
                  <tr>
                    <th>S/N</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Publish</th>
                    <th>Draft</th>
                    <th>Action</th>
                  </tr>

                  <?php
                  $i = 0;
                  while ($row = mysqli_fetch_assoc($result)) {
                    $i++;
                  ?>

                    <tr>


<style>
  button,form,input{
    display: inline;
  }
</style>
<?php
                      $img =  $row['event_img'];
                      $time = $row['event_time'];
                      $location = $row['event_location'];
                      $date = $row['event_date'];
                      $title = $row['event_title'];
                      $status = $row['event_status'];

                      (strlen($title)>51 ) ? $title = substr($title, 0, 51).'...': $title = $title;



                      ?>

                      <td><?php echo $i; ?></td>
                      <td><a href="admin-event-details.php?id=<?php echo $row['id'] ?>"><?php echo $title; ?></a>
                      </td>

                      <td> <img src="../<?php echo $img; ?>" class="img-fluid rounded-circle" style="height: 50px; width:50px;" alt=""></td>
                      <td><a href="#" class="btn btn-sm btn-outline-primary"><?php echo strtoupper($status); ?></a></td>
                      <?php
                      $id_event = $row['id']; ?>
                      <td><a href='admin-event-check.php?publish=<?php echo $id_event; ?>'>Publish</a></td>
                      <td><a href='admin-event-check.php?draft=<?php echo $id_event; ?>'>Draft</a></td>

                      <td>
                        <a href="admin-event-details.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-warning" title="View more"><i class="fas fa-eye"></i></a>
                        
                        <a href="admin-event-edit.php?id=<?php echo $row['id'];?>" class="btn btn-sm btn-outline-primary" title="Edit"><i class="fas fa-pen"></i></a>

                        <a href="admin-event-delete.php?id=<?php echo $row['id'];?>" class="btn btn-sm btn-outline-danger" title="delete" id="delete"><i class="fas fa-trash"></i></a>
                      </td>



                    </tr>
                  <?php
                  }
                  ?>
                </table>

                <ul class="pagination">
                  <?php if ($pagenumber > 1) { ?>

                    <li class="page-item"> <a href="admin-event.php?pageid=<?php echo $pagenumber - 1 ?>" class="page-link">Previous</a></li>
                  <?php } ?>

                  <?php
                  $sql1 = "SELECT * FROM event order by id desc ";
                  $sql1_check = mysqli_query($connection, $sql1);
                  $count = mysqli_num_rows($sql1_check);
                  // echo $count;
                  $total = ceil($count / $limit);
                  for ($i = 1; $i <= $total; $i++) {
                    if ($pagenumber == $i) {
                  ?>
                      <li class="page-item active"> <a href="admin-event.php?pageid=<?php echo $i ?>" class="page-link"><?php echo $i; ?></a></li>
                    <?php } else {
                    ?>
                      <li class="page-item"> <a href="admin-event.php?pageid=<?php echo $i ?>" class="page-link"><?php echo $i; ?></a></li>

                      <!-- ?> -->
                  <?php }
                  } ?>
                  <?php if ($pagenumber != $total) { ?>

                    <li class="page-item"> <a href="admin-event.php?pageid=<?php echo $pagenumber + 1; ?>" class="page-link">Next</a></li>
                  <?php } ?>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- add content stop here-->
    </div>

  </section>
  <!-- section stop -->

</div>
<!-- Main content stop -->

<!-- footer start -->
<?php include("includes/footer.php"); ?>
<!-- footer stop -->