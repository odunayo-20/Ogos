<?php include("includes/header.php"); ?>


<div class="loadr"></div>
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
        <!-- <div class="col-md-12 col-sm-12 col-lg-7"> -->
<?php 
$query = "SELECT * FROM staff";
$result = mysqli_query($connection, $query);
$staffCount = mysqli_num_rows($result);
?>
        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon l-bg-cyan">
              <i class="fas fa-user-tie" style="font-size: 40px;"></i>
            </div>
            <div class="card-wrap">
              <div class="padding-20">
                <div class="text-right">
                  <h3 class="font-light mb-0">
                    <i class="ti-arrow-up text-success"></i> <?php echo $staffCount; ?>
                  </h3>
                  <span class="text-muted"><a href="admin-staff.php">Staff Records</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php 
$query = "SELECT * FROM admission";
$result = mysqli_query($connection, $query);
$admissionCount = mysqli_num_rows($result);
?>

        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon l-bg-cyan">
              <i class="fas fa-id-card" style="font-size: 40px;"></i>
            </div>
            <div class="card-wrap">
              <div class="padding-20">
                <div class="text-right">
                  <h3 class="font-light mb-0">
                    <i class="ti-arrow-up text-success"></i> <?php echo $admissionCount; ?>
                  </h3>
                  <span class="text-muted"><a href="admission.php">Admission Record</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php 
$query = "SELECT * FROM contact";
$result = mysqli_query($connection, $query);
$contact = mysqli_num_rows($result);
?>

        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon l-bg-cyan">
              <i class="fas fa-envelope" style="font-size: 40px;"></i>
            </div>
            <div class="card-wrap">
              <div class="padding-20">
                <div class="text-right">
                  <h3 class="font-light mb-0">
                    <i class="ti-arrow-up text-success"></i> <?php echo $contact; ?>
                  </h3>
                  <span class="text-muted"><a href="contact.php">Contact Record</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <?php 
$query = "SELECT * FROM event";
$result = mysqli_query($connection, $query);
$event = mysqli_num_rows($result);
?>
        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon l-bg-cyan">
              <i class="fas fa-book" style="font-size: 40px;"></i>
            </div>
            <div class="card-wrap">
              <div class="padding-20">
                <div class="text-right">
                  <h3 class="font-light mb-0">
                    <i class="ti-arrow-up text-success"></i> <?php echo $event; ?>
                  </h3>
                  <span class="text-muted"><a href="admin-event.php">Event Record</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php 
$query = "SELECT * FROM news";
$result = mysqli_query($connection, $query);
$news = mysqli_num_rows($result);
?>
        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon l-bg-cyan">
              <i class="fas fa-book-open" style="font-size: 40px;"></i>
            </div>
            <div class="card-wrap">
              <div class="padding-20">
                <div class="text-right">
                  <h3 class="font-light mb-0">
                    <i class="ti-arrow-up text-success"></i> <?php echo $news; ?>
                  </h3>
                  <span class="text-muted"><a href="admin-news.php">News Record</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php 
$query = "SELECT * FROM gallery";
$result = mysqli_query($connection, $query);
$gallery = mysqli_num_rows($result);
?>
        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon l-bg-cyan">
              <i class="fas fa-images" style="font-size: 40px;"></i>
            </div>
            <div class="card-wrap">
              <div class="padding-20">
                <div class="text-right">
                  <h3 class="font-light mb-0">
                    <i class="ti-arrow-up text-success"></i> <?php echo $gallery; ?>
                  </h3>
                  <span class="text-muted"><a href="admin-gallery.php">Gallery Record</a></span>
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
<?php include("includes/footer.php"); ?>
<!-- footer stop -->