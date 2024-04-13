<?php include("includes/header.php"); ?>

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
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>CONTACT</h4>
            </div>
            <div class="card-body">


<?php
$id = $_GET['id'];
$query = "SELECT * FROM contact WHERE id = '$id'";
$result = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($result)){
$name =  $row['name'];
$subject =  $row['subject'];
$message =  $row['message'];
$date =  $row['date'];
}
?>
<div class="row">


<div class="col-md-12 py-2 col-sm-12">
    <b> Name:</b>
   <span>  <?php echo $name?>
   </span>
    <hr>

</div>
<!-- <hr> -->
<div class="col-md-12 py-4">
    <b>Subject:</b>
<br>
<hr>
    <?php echo $subject?>
</div>
<hr>
<div class="col-md-12 py-4">
<b>Message:</b>
<hr>
<p>
    <?php echo $message;?>
</p>
</div>

<div class="col-md-12 col-sm-12 py-4 text-end text-muted">
    <b>Date:</b>
<?php echo $date?>

</div>

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
<!-- <footer class="main-footer">
</footer> -->
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