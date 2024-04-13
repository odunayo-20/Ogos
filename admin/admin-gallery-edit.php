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

      <?php

$idd = $_GET['id'];
$query = "SELECT * FROM gallery WHERE id = '$idd'";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result)== 1){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $category = $row['category'];
        $pic = $row['gallery_img'];
    }
}




?>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>UPDATE GALLERY</h4>
            </div>
            <div class="card-body">
            




              <form action="admin-gallery-edit-process.php" method="post" enctype="multipart/form-data">
              <input type="hidden" value="<?php echo $id;?>" name="id">
             
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-6 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                    <img src="../<?php echo $pic;?>" alt="" style="width: 100px; height:100px;">
                    <div id="image-preview" class="image-preview">
                      <label for="image-upload" id="image-label">Choose File</label>
                      <input type="file" name="pic" id="image-upload"  />
                      <input type="hidden" name="old_pic" id="image-upload" value="<?php echo $pic ?>"  />
                    </div>
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric" name="category">
                      <option value="<?php echo $category ?>"><?php echo $category ?></option>
                      <option value="classroom">Classroom</option>
                      <option value="hostel">Hostel</option>
                      <option value="library">Library</option>
                      <option value="laboratory">Laboratory</option>
                      
                    </select>
                  </div>
                </div>
                
                
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