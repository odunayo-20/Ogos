<?php include("includes/header.php");
?>


<div class="loader"></div>
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
        <div class="col-12">
          <?php
          if (isset($_SESSION['success'])) {
            echo ('<p style="color: green">' . $_SESSION['success'] . "</p>");
            unset($_SESSION['success']);
          }
          if (isset($_SESSION['error'])) {
            echo ('<p style="color: green">' . $_SESSION['error'] . "</p>");
            unset($_SESSION['error']);
          }
          ?>


<?php  

$sql = "SELECT * FROM staff";
$result = mysqli_query($connection, $sql);
while($row = mysqli_fetch_assoc($result)){
  $firstname = $row['firstname'];
  // $middlename = $row['middlename'];
  $lastname = $row['lastname'];
}

?>
          <div class="card">
            <div class="card-header">
              <h4>Assignment Post</h4>
            </div>
            <div class="card-body">
              <form action="assign-process.php" method="post" enctype="multipart/form-data">

                <!-- <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Poster Name</label> -->
                  <!-- <div class="col-sm-12 col-md-7"> -->
                    <input type="hidden" class="form-control" name="name" value="<?php echo $firstname .' '. $lastname; ?>">
                  <!-- </div> -->
                <!-- </div> -->
                <?php

                include_once('../includes/db.php');
$id = $_SESSION['staff_id'];
                $query = "SELECT * FROM staff WHERE staff_id = '$id'";
                $result = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                  $firstname = $row['firstname'];
                  $lastname = $row['lastname'];
                  $staff_name = $firstname . ' ' . $lastname;
                }
                $query = "SELECT * FROM class WHERE status = '0'";
                $result = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                  $classes[] = $row;
                }

                $query = "SELECT * FROM subject WHERE status = '0'";
                $result = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                  $subjects[] = $row;
                }

                ?>

                <div class="form-group row mb-4">
                  <input type="hidden" value="<?php echo $staff_name;?>" name="staff_name">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Class</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric" name="class">
                      <option>--SELECT CLASS--</option>

                      <?php

                      foreach ($classes as $class) { ?>

                        <option value="<?php echo $class['name'] ?>"><?php echo $class['name'] ?></option>
                      <?php }

                      ?>
                    </select>
                  </div>
                </div>


                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subject</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric" name="subject">
                      <option>--SELECT SUBJECT--</option>

                      <?php

                      foreach ($subjects as $subject) { ?>

                        <option value="<?php echo $subject['name'] ?>"><?php echo $subject['name'] ?></option>
                      <?php }

                      ?>
                    </select>
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date Submit</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="date" class="form-control" name="date" value="<?php echo $date; ?>">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Time</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="time" class="form-control" name="time" value="<?php echo $time; ?>">
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric" name="status">
                      <option>--SELECT STATUS--</option>
                      <option value="published">Publish</option>
                      <option value="drafted">Draft</option>
                      <!-- <option value="pending">Pending</option> -->
                    </select>
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-6 col-md-3 col-lg-3">Document</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="file" name="document" id="">
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <!-- <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label> -->
                  <div class="col-sm-12 col-md-7">
                    <button class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
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
<footer class="main-footer">
  <div class="footer-left">
    <a href="templateshub.net">Templateshub</a>
  </div>
  <div class="footer-right">
  </div>
</footer>
</div>
</div>
<!-- General JS Scripts -->
<script src="assets/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="assets/bundles/summernote/summernote-bs4.js"></script>
<script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
<script src="assets/bundles/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
<script src="assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<!-- Page Specific JS File -->
<script src="assets/js/page/create-post.js"></script>
<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="assets/js/custom.js"></script>
</body>


<!-- create-post.html  21 Nov 2019 04:05:03 GMT -->

</html><!-- footer stop -->