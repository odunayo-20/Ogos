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
              <h4>ADD CLASS</h4>
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

            <span class="text-center" style="color: red;"><h5><?php echo$error_msg ?></h5></span>




              <form action="class-process.php" method="post" enctype="multipart/form-data">

                
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-6 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                      <input type="text" class="form-control" name="name" placeholder="class name">
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric" name="status">
                      <option value="0">Active</option>
                      <option value="1">Inactive</option>
                      
                    </select>
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
<!-- General JS Scripts -->
<?php include("includes/footer.php");?>