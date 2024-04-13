<?php include("includes/header.php");
error_reporting(0); ?>


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
<?php

if(isset($_GET['edit'])){
    $id = $_GET['edit'];

    $query = "SELECT * FROM assignment WHERE id = '$id'";
    $result = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $class = $row['class'];
        $document = $row['document'];
        $subject = $row['subject'];
        $dateS = $row['dateS'];
        $status = $row['status'];
        $time = $row['timeP'];
    }
}



?>
      <div class="row">
        <div class="col-12">
        <?php 
                if(isset($_SESSION['success'])){
                  echo('<p style="color: green">'.$_SESSION['success']."</p>");
                  unset($_SESSION['success']);
                }
                if(isset($_SESSION['error'])){
                  echo('<p style="color: danger">'.$_SESSION['error']."</p>");
                  unset($_SESSION['error']);
                }
                ?>

          <div class="card">
            <div class="card-header">
              <h4>Edit Assignment Post</h4>
            </div>
            <div class="card-body">
              <form action="assign-edit-process.php" method="post" enctype="multipart/form-data">

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Poster Name</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="name" value="<?php echo $name?>">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date Submit</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="date" class="form-control" name="date" value="<?php echo $dateS?>">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Time</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="time" class="form-control" name="time" value="<?php echo $time?>">
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subject</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control" name="subject" value="<?php echo $subject;?>">
                  </div>

                </div>


                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Class</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric" name="class">
                      <option value="<?php echo $class?>"><?php echo $class?></option>
                      <option value="JSS1">JSS1</option>
                      <option value="JSS2">JSS2</option>
                      <option value="JSS3">JSS3</option>
                      <option value="SS1">SS1</option>
                      <option value="SS2">SS2</option>
                      <option value="SS3">SS3</option>
                      <!-- <option value="pending">Pending</option> -->
                    </select>
                  </div>
                </div>



                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric" name="status">
                      <option value="<?php echo $status?>"><?php echo $status?></option>
                      <option value="published">Publish</option>
                      <option value="drafted">Draft</option>
                      <!-- <option value="pending">Pending</option> -->
                    </select>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-6 col-md-3 col-lg-3">Document</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="hidden" name="old_document" id="" value="../<?php echo $document;?>">
                    <input type="file" name="document">
                  </div>
                </div>
                
                <input type="hidden" name="id" value="<?php echo $id?>">

                <div class="form-group row mb-4">
                  <!-- <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label> -->
                  <div class="col-sm-12 col-md-7">
                    <button class="btn btn-primary">Update</button>
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

