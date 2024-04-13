<?php include("includes/header.php"); ?>

<!-- <div class="loader"></div> -->
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
        <div class="col-12">
        <?php 
                if(isset($_SESSION['success'])){
                  echo('<p style="color: green">'.$_SESSION['success']."</p>");
                  unset($_SESSION['success']);
                  if(isset($_SESSION['error'])){
                    echo('<p style="color: danger">'.$_SESSION['error']."</p>");
                    unset($_SESSION['error']);
                  }
  
                }
                ?>

          <div class="card">
            <div class="card-header">
              <h4>Staff Record Table</h4>
              <div class="card-header-form">
                <form action="" method="GET">
                  <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search">
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
              $sql = ("SELECT * FROM staff order by staff_id desc LIMIT $start, $limit");
              $result = mysqli_query($connection, $sql);
            } else {
              $start = 0;
              $sql = ("SELECT * FROM staff order by staff_id desc LIMIT $start, $limit");
              $result = mysqli_query($connection, $sql);
            }

            // $row['staff_id'];
            ?>
            <!-- query to check for staff count start -->
            <?php

            $query = "SELECT * FROM staff";
            $Staff = mysqli_query($connection, $query);

            $StaffCount = mysqli_num_rows($Staff);

            // not teaching staff start
            $query = "SELECT * FROM staff WHERE category = 'NTS'";
            $nts = mysqli_query($connection, $query);
            $ntsCount = mysqli_num_rows($nts);
            // not teaching staff stop

            // teaching staff query start
            $query = "SELECT * FROM staff WHERE category = 'TS'";
            $ts = mysqli_query($connection, $query);
            $tsCount = mysqli_num_rows($ts);
            // teaching staff query stop

            // search filter
            if (isset($_GET['search'])) {
              $search = $_GET['search'];
          
              $sql = "SELECT * FROM staff WHERE CONCAT(email, staff_id, phone, gender, username, firstname, lastname, middlename, datep) LIKE '%". $search . "%'";
              $result = mysqli_query($connection, $sql);
          
          }

            ?>
            <!-- query to check for staff count stop -->
            <div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">All <span class="badge badge-white"><?php echo $StaffCount ?></span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Not Teaching <span class="badge badge-primary"><?php echo $ntsCount ?></span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Teaching <span class="badge badge-primary"><?php echo $tsCount ?></span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>


            <div class="card-body">
              <div class="col-md-12">
              </div>
              <div class="table-responsive">
                <table id="mainTable" class="table table-striped">
                  <tr>
                    <th>S/N</th>
                    <th>Username</th>
                    <th>Profile</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Action</th>
                  </tr>

                  <?php
                  $i = 0;
                  while ($row = mysqli_fetch_assoc($result)) {
                    $i++;
                    $img = $row['img']; 
                    $firstname = $row['firstname']; 
                    $lastname = $row['lastname']; 
                  ?>

                    <tr>

                      <style>
                        button, input, form{
                          display: inline-block;
                        }
                      </style>

                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['username']; ?></td>
                      <td> <img src="../<?php echo $img; ?>" class="img-fluid rounded-circle" style="height: 50px; width:50px;" alt=""></td>
                      <td><?php echo $firstname; ?></td>
                      <td><?php echo $lastname; ?></td>
                      <td>
                        <a href="admin-staff-details.php?id=<?php echo $row['staff_id']; ?>" class="btn btn-sm btn-outline-warning"><i class="fas fa-eye"></i></a>
                        <a href="admin-staff-edit.php?id=<?php echo $row['staff_id'];?>" class="btn btn-sm btn-outline-primary"><i class="fas fa-pen"></i></a>
                        <a href="admin-staff-delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-sm btn-outline-danger" id="delete"><i class="fas fa-trash"></i></a>

                      </td>

                    </tr>
                  <?php
                  }
                  ?>
                </table>

                <ul class="pagination">
                  <?php if ($pagenumber > 1) { ?>

                    <li class="page-item"> <a href="admin-staff.php?pageid=<?php echo $pagenumber - 1 ?>" class="page-link">Previous</a></li>
                  <?php } ?>

                  <?php
                  $sql1 = "SELECT * FROM staff order by staff_id desc ";
                  $sql1_check = mysqli_query($connection, $sql1);
                  $count = mysqli_num_rows($sql1_check);
                  // echo $count;
                  $total = ceil($count / $limit);
                  for ($i = 1; $i <= $total; $i++) {
                    if ($pagenumber == $i) {
                  ?>
                      <li class="page-item active"> <a href="admin-staff.php?pageid=<?php echo $i ?>" class="page-link"><?php echo $i; ?></a></li>
                    <?php } else {
                    ?>
                      <li class="page-item"> <a href="admin-staff.php?pageid=<?php echo $i ?>" class="page-link"><?php echo $i; ?></a></li>

                      <!-- ?> -->
                  <?php }
                  } ?>
                  <?php if ($pagenumber != $total) { ?>

                    <li class="page-item"> <a href="admin-staff.php?pageid=<?php echo $pagenumber + 1; ?>" class="page-link">Next</a></li>
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