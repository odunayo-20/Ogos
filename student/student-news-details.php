<?php include("includes/header.php"); ?>
<?php error_reporting(0); ?>

<!-- <div class="loader"></div> -->
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

      <?php
      $id = $_GET['id'];
      $query = "SELECT * FROM news WHERE id = '$id'";
      $result = mysqli_query($connection, $query);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

          $title = $row['title'];
          $subtitle = $row['subtitle'];
          $summary = $row['summary'];
          $content = $row['content'];
          $date = $row['date'];
          $time = $row['time'];
          $tag = $row['tag'];
          $status = $row['status'];
          $img = $row['pic'];
        }
      }


      ?>

      <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10" style="margin: 0 auto;">
        <div class="card">
          <div class="boxs mail_listing">
            <div class="inbox-body no-pad">
              <section class="mail-list">
                <div class="mail-sender">
                  <div class="mail-heading">
                    <h4 class="vew-mail-header">
                      <b style="font-size: 16px;"><?php echo $title; ?></b>
                      <hr>
                      <small class="text-muted" style="font-size: 16px;"><?php echo $subtitle; ?></small>
                      <hr>
                      <small class="text-muted" style="font-size: 16px;"><?php echo $summary; ?></small>

                    </h4>
                  </div>
                  <hr>
                  <div class="media my-2">
                    <div class="media-body">
                      <span class="date pull-right">Time: <?php echo $time; ?> Date: <?php echo $date; ?></span><br>

                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <a href="#">
                    <img class="img-thumbnail img-responsive" style="width: 100%; height:20rem; object-fit:cover;" alt="attachment" src="../<?php echo $img; ?>">
                  </a>
                  <!-- <a class="name" href="#"> IMG_001.png
                                <span>20KB</span>
                              </a> -->
                </div>

                <div class="view-mail p-t-2 px-3">
                  <p style="text-align: justify;" class="text-muted"><?php echo $content; ?></p>


                </div>

              </section>
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