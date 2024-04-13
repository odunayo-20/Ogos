<?php include("includes/header.php"); ?>
<?php //error_reporting(0); ?>

<!-- <div class="loader"></div> -->
<!-- navigation bar start -->
<?php include("includes/staff-navbar.php"); ?>
<!-- navigation bar stop -->

<!-- sidebar start -->
<?php include("includes/staff-sidebar.php"); ?>
<!-- sidebar stop -->

<!-- Main Content start -->
<div class="main-content">
  <!-- section start -->
  <section class="section">
    <div class="section-body">
      <!-- add content start here -->

      <div class="row">
        <div class="col-md-12">
          <a href="assign-add.php" class="btn btn-primary my-3 mx-3" style="float: right;">Add Assignment</a>
          <a href="submit-record.php" class="btn btn-danger my-3" style="float: right;">Submitted Assignment</a>
        </div>
        <div class="col-12">
          <?php
          if (isset($_SESSION['success'])) {
            echo ('<p style="color: green">' . $_SESSION['success'] . "</p>");
            unset($_SESSION['success']);
          }
          if (isset($_SESSION['error'])) {
            echo ('<p style="color: danger">' . $_SESSION['error'] . "</p>");
            unset($_SESSION['error']);
          }
          ?>

          <div class="card">
            <div class="card-header">
              <h4>Assignment Record Table</h4>
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
$id = $_SESSION['staff_id'];
$query = "SELECT * FROM staff WHERE staff_id = '$id'";
$result = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($result)){
  $staff_firstname = $row['firstname'];
  $staff_lastname = $row['lastname'];
  $staff = $staff_firstname . ' ' . $staff_lastname;
}


?>

            <?php
            $limit = 5;

            if (isset($_GET['pageid'])) {

              $pagenumber = $_GET['pageid'];
              $start = ($pagenumber - 1) * $limit;
              $sql = ("SELECT * FROM assignment  WHERE staff_name = '$staff' order by id desc LIMIT $start, $limit");
              $result = mysqli_query($connection, $sql);
            } else {
              $start = 0;
              $sql = ("SELECT * FROM assignment WHERE  staff_name = '$staff' order by id desc LIMIT $start, $limit");
              $result = mysqli_query($connection, $sql);
            }

            // $row['id'];
            ?>
            <!-- query to check for staff count start -->
            <?php

            $query = "SELECT * FROM assignment  WHERE  staff_name = '$staff'";
            $assign = mysqli_query($connection, $query);

            $assignCount = mysqli_num_rows($assign);


            // not teaching staff start
            $query = "SELECT * FROM assignment WHERE status = 'drafted'";
            $draft = mysqli_query($connection, $query);
            $draftCount = mysqli_num_rows($draft);
            // not teaching staff stop



            // teaching staff query start
            $query = "SELECT * FROM assignment WHERE status = 'published' AND  staff_name = '$staff'";
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
                        <a class="nav-link active" href="#">All <span class="badge badge-white"><?php echo $assignCount ?></span></a>
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
                    <th>Teacher Name</th>
                    <th>Status</th>
                    <th>Class</th>
                    <th>Subject</th>
                    <th>Document</th>
                    <!-- <th>Message</th> -->
                    <th>Date</th>
                    <th>Time</th>
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

                      <td><?php echo $i; ?></td>

                      <?php
                      $id = $row['id'];
                      $name =  $row['staff_name'];
                      $document =  $row['document'];
                      $time = $row['timeP'];
                      $subject = $row['subject'];
                      $date = $row['dateS'];
                      $class = $row['class'];
                      $status = $row['status'];

                      // $message1 = substr($message, 0, 20);


                      ?>
                      <td><?php echo $name; ?></td>
                      <td><a href="#" class="btn btn-sm btn-outline-primary"><?php echo strtoupper($status); ?></a></td>
                      <td><?php echo $subject; ?></td>
                      <td><?php echo $class; ?></td>
                      <td> <a href='../download.php?path=<?php echo $document; ?>'><i class="fa fa-download"></i></a></td>
                      <td><?php echo $date; ?></td>
                      <td><?php echo $time; ?></td>
                      <?php
                      $id_event = $row['id']; ?>
                      <td><a href='assign-check.php?publish=<?php echo $id_event; ?>'>Publish</a></td>
                      <td><a href='assign-check.php?draft=<?php echo $id_event; ?>'>Draft</a></td>
                      <style>
                        button,
                        input,
                        a {
                          display: inline;
                        }
                      </style>
                      <td>
                        <a href="assign-delete.php?delete=<?php echo $id
                                                          ?>" class="btn btn-sm btn-outline-danger" id="delete"> <i class="fas fa-trash"></i></a>
                        <a href="assign-edit.php?edit=<?php echo $id ?>" class="btn btn-sm btn-outline-primary"> <i class="fas fa-pen"></i></a>
                      </td>

                    </tr>
                  <?php
                  }
                  ?>
                </table>

                <ul class="pagination">
                  <?php if ($pagenumber > 1) { ?>

                    <li class="page-item"> <a href="assign.php?pageid=<?php echo $pagenumber - 1 ?>" class="page-link">Previous</a></li>
                  <?php } ?>

                  <?php
                  $sql1 = "SELECT * FROM assignment order by id desc ";
                  $sql1_check = mysqli_query($connection, $sql1);
                  $count = mysqli_num_rows($sql1_check);
                  // echo $count;
                  $total = ceil($count / $limit);
                  for ($i = 1; $i <= $total; $i++) {
                    if ($pagenumber == $i) {
                  ?>
                      <li class="page-item active"> <a href="assign.php?pageid=<?php echo $i ?>" class="page-link"><?php echo $i; ?></a></li>
                    <?php } else {
                    ?>
                      <li class="page-item"> <a href="assign.php?pageid=<?php echo $i ?>" class="page-link"><?php echo $i; ?></a></li>

                      <!-- ?> -->
                  <?php }
                  } ?>
                  <?php if ($pagenumber != $total) { ?>

                    <li class="page-item"> <a href="assign.php?pageid=<?php echo $pagenumber + 1; ?>" class="page-link">Next</a></li>
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