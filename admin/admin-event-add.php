<?php include("includes/header.php");
// session_start();
error_reporting(0);
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
                    <h4>Write Your Event Post</h4>
                  </div>
                  <div class="card-body">
                    <form action="admin-event-process.php" method="post" enctype="multipart/form-data">

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="title" value="<?php echo $title?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Poster Name</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="poster_name" value="<?php echo $post_name?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-6 col-md-3 col-lg-3">Image</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">Choose File</label>
                          <input type="file" name="img" id="image-upload" value="<?php echo $img?>"  />
                          <img src="" alt="" style="width: 300px; height:300px;" class="image-preview" id="showImage">
                        </div>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Message</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote-simple" name="message"><?php echo $message?></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" name="date" value="<?php echo $date?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Time</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="time" class="form-control" name="time" value="<?php echo $time?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">location</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="location" value="<?php echo $location?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="status">
                          <option>--Select Status--</option>
                          <option value="published">Publish</option>
                          <option value="drafted">Draft</option>
                          <!-- <option value="pending">Pending</option> -->
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <!-- <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label> -->
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Create Post</button>
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
<?php include("includes/footer.php");?>