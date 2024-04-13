<?php include("includes/header.php"); ?>
<?php error_reporting(0); ?>

<div class="loader"></div>
<!-- navigation bar start -->
<?php include("includes/student-navbar.php"); ?>
<!-- navigation bar stop -->

<!-- sidebar start -->
<?php include("includes/student-sidebar.php"); ?>
<!-- sidebar stop -->

<!-- Main Content start -->
<div class="main-content">
    <!-- section start -->
    <section class="section">
        <div class="section-body">
            <!-- add content start here -->

            <div class="row">
                <div class="col-12">
                    <!-- <a href="assign-submit.php" class="btn btn-primary my-2 mx-2" style="float: right;">Submit Assignment</a> -->
                    <a href="submit-record.php" class="btn btn-danger my-2" style="float: right;">Submit Record</a>
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
            $id = $_SESSION['student_id'];

$query = "SELECT * FROM student WHERE student_id = '$id'";
$test = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($test)){
  $class = $row['class'];
}

            $limit = 5;

            if (isset($_GET['pageid'])) {

              $pagenumber = $_GET['pageid'];
              $start = ($pagenumber - 1) * $limit;
              $sql = ("SELECT * FROM assignment WHERE class = '$class' AND status = 'published' order by id desc LIMIT $start, $limit");
              $result = mysqli_query($connection, $sql);
            } else {
              $start = 0;
              $sql = ("SELECT * FROM assignment WHERE class = '$class' AND status = 'published' order by id desc LIMIT $start, $limit");
              $result = mysqli_query($connection, $sql);
            }

            // $row['id'];
            ?>
                        <!-- query to check for staff count start -->
                        <?php

            $query = "SELECT * FROM assignment  WHERE class = '$class'  ";
            $assign = mysqli_query($connection, $query);

            $assignCount = mysqli_num_rows($assign);



            ?>
                        <!-- query to check for staff count stop -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">All <span
                                                        class="badge badge-white"><?php echo $assignCount ?></span></a>
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
                                        <th>Subject</th>
                                        <th>Class</th>
                                        <th>Document</th>
                                        <th>Submission Date</th>
                                        <th>Submission Time</th>
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



                      ?>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $subject; ?></td>
                                        <td><?php echo $class; ?></td>
                                        <td> <a href='../download.php?path=<?php echo $document; ?>'><i
                                                    class="fa fa-download"></i></a></td>
                                        <td><?php echo $date; ?></td>
                                        <td><?php echo $time; ?></td>
                                        <td><a href="assign-submit.php?id=<?php echo $id; ?>"
                                                class="btn btn-sm btn-outline-primary">Submit</a></td>
                                    </tr>
                                    <?php
                  }
                  ?>
                                </table>

                                <ul class="pagination">
                                    <?php if ($pagenumber > 1) { ?>

                                    <li class="page-item"> <a href="assign.php?pageid=<?php echo $pagenumber - 1 ?>"
                                            class="page-link">Previous</a></li>
                                    <?php } ?>

                                    <?php
                  $sql1 = "SELECT * FROM assignment  WHERE status='published' order by id desc ";
                  $sql1_check = mysqli_query($connection, $sql1);
                  $count = mysqli_num_rows($sql1_check);
                  // echo $count;
                  $total = ceil($count / $limit);
                  for ($i = 1; $i <= $total; $i++) {
                    if ($pagenumber == $i) {
                  ?>
                                    <li class="page-item active"> <a href="assign.php?pageid=<?php echo $i ?>"
                                            class="page-link"><?php echo $i; ?></a></li>
                                    <?php } else {
                    ?>
                                    <li class="page-item"> <a href="assign.php?pageid=<?php echo $i ?>"
                                            class="page-link"><?php echo $i; ?></a></li>

                                    <!-- ?> -->
                                    <?php }
                  } ?>
                                    <?php if ($pagenumber != $total) { ?>

                                    <li class="page-item"> <a href="assign.php?pageid=<?php echo $pagenumber + 1; ?>"
                                            class="page-link">Next</a></li>
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