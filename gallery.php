<?php
include("includes/db.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>



  <!-- favicon -->
  <link rel="shortcut icon" href="ogo oluwa favicon/android-chrome-512x512.png" type="image/x-icon">
  <!-- favicon -->

  <!-- icon -->
  <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
  <!-- icon -->

  <!-- bootstrap icon -->
  <link rel="stylesheet" href="bootstrap-icons-1.10.5/font/bootstrap-icons.min.css">
  <!-- bootstrap icon -->


  <link rel="stylesheet" href="css/gallery.css">



  <!-- bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.bundle.js"></script>
  <!-- bootstrap -->

  <!-- General CSS Files -->
  <!-- <link rel="stylesheet" href="admin/assets/css/app.min.css"> -->
  <link href="admin/assets/bundles/lightgallery/dist/css/lightgallery.css" rel="stylesheet">
  <!-- Template CSS -->
  <!-- <link rel="stylesheet" href="admin/assets/css/style.css"> -->
  <link rel="stylesheet" href="admin/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="admin/assets/css/custom.css">


</head>

<body>



  <!-- topbar -->
  <?php include('includes/topbar.php'); ?>
  <!-- topbar -->


  <!-- body -->

  <div class="container-fluid">
    <!-- <div class="container"> -->
      <div class="row">
        <div class="col-md-3 left-cards">


          <!-- admission info -->

          <div class="card bg-warning mx-auto mb-3 mt-3 text-center " style="height: auto;">
            <div class="card-header" style=" background-color:  rgb(59, 15, 129);
color: white; height: 50px ;">
              <div class="card-title ">ADMISSION INFO</div>
            </div>
            <div class="card-body mb-3">
              <div class="card-text ">
                <a href="ads_guildlines.php" class="btn btn-light mb-2"> Admission Guildlines </a>
                <a href="admission.php" class="btn btn-light mb-2 ">Fill Admission Form </a>

                <a href="admission form/ogo oluwa Admission Form.pdf" class="btn btn-light btn-defaulttext-capitalise mb-2"> <span class="glyphicon glyphicon-download-alt"></span> Download Admission Form </a>
                <!-- <a href="upload/Admission Form.pdf" class="btn btn-lg btn-default"><span class="glyphicon glyphicon-download-alt"></span> Download Form </a> -->
              </div>
            </div>


          </div>

          <!-- admission info -->

          <!-- school anthem -->

          <div class="card bg-warning mx-auto mb-3 mt-3 text-center " style="height: auto;">
            <div class="card-header" style=" background-color:  rgb(59, 15, 129);
color: white; height: 50px ;">
              <div class="card-title ">SCHOOL ANTHEM</div>
            </div>
            <div class="card-body">
              <div class="card-text text-start mb-3">
                Great Ogo Oluwa, My alma mater
                We hail thee, the hope of all
                Where discipline and hard work rule
                Ogo Oluwa we are proud of you
                We are the future leader
                We shall not forget thee
                We hail the light of life
                Education for better future.
              </div>
            </div>
            <div class="card-header " style=" background-color:  rgb(59, 15, 129);
color: white; height: 50px ;">
              <div class="card-title ">SCHOOL PLEDGE</div>
            </div>
            <div class="card-body">
              <div class="card-text text-start">
                I pledge to Ogo Oluwa, my school,
                To lift her up to the mountain top
                To be truthful and faithful
                To become responsible
                leaders of tomorrow
                So help me God.
              </div>
            </div>


          </div>

          <!-- school anthem -->

        </div>



        <div class="col-md-9 right-cards ">
          <div class="mt-3 mb-3">


            <strong class="mt-3 mb-3 text-center" style=" color:  rgb(59, 15, 129);">
              <h4>PICTURE SPEAKS</h4>
            </strong>

            <div class="container">
              <div class="feature-filters clearfix center m-b40">
              <ul class="nav nav-pills  mb-3 mt-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-classroom-tab" data-bs-toggle="pill" data-bs-target="#pills-classroom" type="button" role="tab" aria-controls="pills-classroom" aria-selected="false">Classrooms</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-hostel-tab" data-bs-toggle="pill" data-bs-target="#pills-hostel" type="button" role="tab" aria-controls="pills-hostel" aria-selected="false">Hostel</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-library-tab" data-bs-toggle="pill" data-bs-target="#pills-library" type="button" role="tab" aria-controls="pills-library" aria-selected="false">Library</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-laboratory-tab" data-bs-toggle="pill" data-bs-target="#pills-laboratory" type="button" role="tab" aria-controls="pills-laboratory" aria-selected="false">Laboratory</button>
                </li>

              </ul>


              </div>
            </div>

             
              <div class=" clearfix">
              <div class="tab-content" id="pills-tabContent">

                <!-- ALL TAB -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

                  <?php
                  $query = "SELECT * FROM gallery";
                  $result = mysqli_query($connection, $query);
                  while ($row =  mysqli_fetch_assoc($result)) {
                    $img = $row['gallery_img'];
                  }


                  ?>
                       <style>
                        .profile{
                          width: 100px;
                          height: 250px;
                        }
                        .profile img{
                          width: 100px;
                          height: 250px;
                          background-image: url('<?php echo $img;?>');
                          background-size: cover;
                          border-radius: 3px;
                        }
                      </style>
                  <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="display: none;">
                      <a href="<?php echo $img; ?>" data-sub-html="gallery">
                        <img class="img-responsive thumbnail" src="<?php echo $img; ?>" alt="" style="height: 250px; width:100%; display: none;">
                      </a>
                    </div>
                    <?php

                 
if(mysqli_num_rows($result) == 0){
                   
  echo '<div class="col-md-8 p-5 mt-3 mx-auto card text-center">Data Not Availaibe</div>';
}else{
  foreach ($result as $check) {
    $img =  $check['gallery_img'];
    $id =  $check['id'];
    
    ?>

                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="<?php echo $img; ?>" data-sub-html="GALLERY" class="profile">
                          <img class="img-fluid img-responsive thumbnail" src="<?php echo $img; ?>" style="width:100%; height: 250px;" alt="">
                        </a>
                      </div>

                    <?php }}
                    ?>


                  </div>


                </div>
                <!-- ALL TAB -->


                <!-- CLASSROOM TAB -->
                <div class="tab-pane fade" id="pills-classroom" role="tabpanel" aria-labelledby="pills-classroom-tab" tabindex="0">
                  <?php
                  $query = "SELECT * FROM gallery WHERE category = 'classroom'";
                  $result = mysqli_query($connection, $query);
                  while ($row =  mysqli_fetch_assoc($result)) {
                    $img = $row['gallery_img'];
                  }


                  ?>
                  <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="display: none;">
                      <a href="<?php echo $img; ?>" data-sub-html="Demo Description" class="profile">
                        <img class="img-responsive thumbnail" src="<?php echo $img; ?>" alt="" style="width:100%; height: 250px;">
                      </a>
                    </div>
                    <?php

if(mysqli_num_rows($result) == 0){
                   
  echo '<div class="col-md-8 p-5 mt-3 mx-auto card text-center">Data Not Availaibe</div>';
}else{
  foreach ($result as $check) {
    $img =  $check['gallery_img'];
    $id =  $check['id'];
    
    ?>
                  
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="<?php echo $img; ?>" data-sub-html="Demo Description" class="profile">
                          <img class="img-responsive thumbnail" src="<?php echo $img; ?>" style="width:100%; height: 250px;" alt="">
                        </a>
                      </div>

                    <?php }}
                    ?>


                  </div>
                </div>
                <!-- </div> -->
                <!-- CLASSROOM TAB -->


                <!-- HOSTEL TAB -->
                <div class="tab-pane fade" id="pills-hostel" role="tabpanel" aria-labelledby="pills-hostel-tab" tabindex="0">
                  <div class="row py-2">
                    <?php
                    $query = "SELECT * FROM gallery WHERE category = 'hostel'";
                    $result = mysqli_query($connection, $query);
                    $i = 0;
                
                    if(mysqli_num_rows($result) == 0){
                   
                      echo '<div class="col-md-8 p-5 mt-3 mx-auto card text-center">Data Not Availaibe</div>';
                    }else{
                      foreach ($result as $check) {
                        $img =  $check['gallery_img'];
                        $id =  $check['id'];
                        
                        ?>
                      <div class="col-md-3 p-2">
                        <span class="badge badge-primary">
                          </span>
                          <a href="<?php echo $img; ?>" class="profile"> <img class="img-fluid" style="width:100%; height: 250px;" src="<?php echo $img; ?>" alt="img">
                        </a>
                      </div>
                      <?php      }
                    }
                    ?>

                  </div>
                </div>
                <!-- </div> -->
                <!-- HOSTEL TAB -->

                <!--LIBRARY TAB -->
                <div class="tab-pane fade" id="pills-library" role="tabpanel" aria-labelledby="pills-library-tab" tabindex="0">
                  <div class="row py-2">
                    <?php
                    $query = "SELECT * FROM gallery WHERE category = 'library'";
                    $result = mysqli_query($connection, $query);
                    $i = 0;

                    if(mysqli_num_rows($result) == 0){
                   
                      echo '<div class="col-md-8 p-5 mx-auto card text-center">Data Not Availaibe</div>';
                    }else{
                      foreach ($result as $check) {
                        $img =  $check['gallery_img'];
                        $id =  $check['id'];
                        
                        ?>
                      <div class="col-md-3 p-2">
                        <span class="badge badge-primary">
                          </span>
                          <a href="<?php echo $img; ?>" class="profile"> <img class="img-fluid" style="width:100%; height: 250px;" src="<?php echo $img; ?>" alt="img">
                        </a>
                      </div>
                      <?php      }
                    }
                    ?>

                  </div>
                </div>
                <!-- LIBRARY TAB -->

                <!-- LABORATORY TAB -->
                <div class="tab-pane fade" id="pills-laboratory" role="tabpanel" aria-labelledby="pills-laboratory-tab" tabindex="0">
                  <div class="row py-2">
                    <?php
                    $query = "SELECT * FROM gallery WHERE category = 'laboratory'";
                    $result = mysqli_query($connection, $query);
                    $i = 0;

                    if(mysqli_num_rows($result) == 0){
                   
                      echo '<div class="col-md-8 p-5 mx-auto card text-center">Data Not Availaibe</div>';
                    }else{
                      foreach ($result as $check) {
                        $img =  $check['gallery_img'];
                        $id =  $check['id'];
                        
                        ?>
                      <div class="col-md-3 p-2">
                        <span class="badge badge-primary">
                          </span>
                          <a href="<?php echo $img; ?>" class="profile"> <img class="img-fluid" style="width:100%; height: 250px;" src="<?php echo $img; ?>" alt="img">
                        </a>
                      </div>
                      <?php      }
                    }
                    ?>


                  </div>
                </div>
                <!-- LABORATORY TAB -->



              </div>

            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
  </div>



  <!-- body -->




  <!-- footer -->
  <?php require_once('includes/footer.php'); ?>
  <!-- footer -->


</body>

</html>