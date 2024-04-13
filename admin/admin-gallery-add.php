<?php include("includes/header.php"); ?>
<!-- <?php //error_reporting(0); ?> -->

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
              <h4>ADD GALLERY</h4>
            </div>
            <div class="card-body">
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




              <form action="admin-gallery-process.php" method="post" enctype="multipart/form-data">

                
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-6 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                    <img src="" alt="" srcset="" id="showImage" class="image-preview" style="height: 100px; width:100px">
                    <div id="image-preview" class="image-preview">
                      <label for="image-upload" id="image-label">Choose File</label>
                      <input type="file" name="pic" id="image-upload"/>
                    </div>
                  </div>
                </div>


                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric" name="category">
                      <option>---Choose category---</option>
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
                    <button class="btn btn-primary">Upload</button>
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
<!-- General JS Scripts -->


<?php include("includes/footer.php");?>