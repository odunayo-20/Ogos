<?php include("includes/header.php");
?>


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


          <div class="card">
            <div class="card-header">
              <h4>Assignment Submission</h4>
            </div>
            <div class="card-body">
              <form action="assign-submit-process.php" method="post" enctype="multipart/form-data">
                <?php
                include('../includes/db.php');
$id = $_GET['id'];
                $query = "SELECT * FROM student";
                $result = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                  $firstname = $row['firstname'];
                  $lastname = $row['lastname'];
                  $student_name = $firstname . ' ' . $lastname;
                  $class = $row['class'];
                }




                ?>


                <div class="form-group row mb-4">
                  <input type="hidden" name="id" value="<?php echo $id ?>">
                  <input type="hidden" name="student_name" value="<?php echo $student_name ?>">
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