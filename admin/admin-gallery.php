<?php include("includes/header.php"); ?>

<style>
</style>
<!-- admin-gallery -->



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
      <div class="col-12 my-2">
                    <a href="admin-gallery-add.php" class="btn btn-primary" style="float: right;">Add Gallery</a>
                </div>

        <div class="col-12">
          <?php
          if (isset($_SESSION['success'])) {
            echo ('<p style="color: green">' . $_SESSION['success'] . "</p>");
            unset($_SESSION['success']);
          }
          if (isset($_SESSION['error'])) {
            echo ('<p style="color: danger">' . $_SESSION['error'] . "</p>");
            unset($_SESSION['error']);
          }
          ?>

          <div class="card">
            <div class="card-header">
              <h4>PREVIEW GALLERY</h4>
            </div>
            <div class="card-body">


              <?php
              $limit = 10;

              if (isset($_GET['pageid'])) {

                $pagenumber = $_GET['pageid'];
                $start = ($pagenumber - 1) * $limit;
                $sql = ("SELECT * FROM gallery order by id desc LIMIT $start, $limit");
                $result = mysqli_query($connection, $sql);
              } else {
                $start = 0;
                $sql = ("SELECT * FROM gallery order by id desc LIMIT $start, $limit");
                $result = mysqli_query($connection, $sql);
              }


              ?>
              <!-- query to check for gallery count start -->
              <?php

              $query = "SELECT * FROM gallery";
              $gallery = mysqli_query($connection, $query);

              $galleryCount = mysqli_num_rows($gallery);


              // classroom query start
              $query = "SELECT * FROM gallery WHERE category = 'classroom'";
              $classroom = mysqli_query($connection, $query);
              $classroomCount = mysqli_num_rows($classroom);
              // classroom query stop


              // hostel query start
              $query = "SELECT * FROM gallery WHERE category = 'hostel'";
              $hostel = mysqli_query($connection, $query);
              $hostelCount = mysqli_num_rows($hostel);
              // hostel query stop

              // library query start
              $query = "SELECT * FROM gallery WHERE category = 'library'";
              $library = mysqli_query($connection, $query);
              $libraryCount = mysqli_num_rows($library);
              // library query stop

              // laboratory query start
              $query = "SELECT * FROM gallery WHERE category = 'laboratory'";
              $laboratory = mysqli_query($connection, $query);
              $laboratoryCount = mysqli_num_rows($laboratory);
              // laboratory query stop



              ?>


              <!-- query to display count stop -->
              <div class="row">
                <div class="col-12">
                  <div class="card mb-0">
                    <div class="card-body">
                      <ul class="nav nav-pills mb-3 " role="tablist">
                        <li class="nav-item ms-2" role="presentation">
                          <a class="nav-link active" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All <span class="badge badge-white"><?php echo $galleryCount ?></span></a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-classroom" type="button" role="tab" aria-controls="pills-classroom" aria-selected="false">Classroom <span class="badge badge-primary"><?php echo $classroomCount ?></span></a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-hostel" type="button" role="tab" aria-controls="pills-hostel" aria-selected="false">Hostel <span class="badge badge-primary"><?php echo $hostelCount ?></span></a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-library" type="button" role="tab" aria-controls="pills-library" aria-selected="false">Library <span class="badge badge-primary"><?php echo $libraryCount ?></span></a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-laboratory" type="button" role="tab" aria-controls="pills-laboratory" aria-selected="false">Laboratory <span class="badge badge-primary"><?php echo $laboratoryCount ?></span></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>






              <div class="tab-content" id="pills-tabContent">


                <!-- all gallery -->
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                  <div class="row">
                    <?php
                    $query = "SELECT * FROM gallery";
                    $result = mysqli_query($connection, $query);
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                      $i++;
                      $img =  $row['gallery_img'];
                    }

                    foreach ($result as $check) {
                      $img =  $check['gallery_img'];
                      $id =  $check['id'];

                    ?>
                      <div class="col-md-2 p-2">
                        <div class="project mb-3 card">
                          <img class="img-fluid" style="height: 200px; width:100%; object-fit:cover;" src="../<?php echo $img; ?>" alt="img">
                          <div class="overlay">
                            <div>

                              <div class="row">
                                <div class="edit-icons  ">
                                  <a href="admin-gallery-edit.php?id=<?php echo $id; ?>"  title="Edit"><i class='fa fa-edit'></i></a>
                                </div>
                                <div class="trash-icons  ">
                                <a href="admin-gallery-delete.php?id=<?php echo $id; ?>"  title="Delete" id="delete"><i class='fa fa-trash'></i></a>

                                  <!-- <form action="admin-gallery-delete.php" method="post">
                                    <input type="hidden" name="delete_id" value="<?php //echo $id?>">
                                    <input type="hidden" name="delete_gallery" value="../<?php //echo $img?>">
                                    <button type="submit" name="del_gallery_submit" class="btn btn-primary" title="Delete" ><i class="fa fa-trash" aria-hidden="true"></i></button>

                                  </form> -->
                                </div>
                              </div>

                            </div>
                          </div>

                        </div>

                      </div>


                    <?php      }
                    ?>

                  </div>
                </div>
                <!-- all gallery -->

                <!-- CLASSROOM TAB -->
                <div class="tab-pane fade" id="pills-classroom" role="tabpanel" aria-labelledby="pills-classroom-tab" tabindex="0">
                  <!-- classroom  query start -->
                  <div class="row">
                    <?php
                    $query = "SELECT * FROM gallery WHERE category = 'classroom'";
                    $result = mysqli_query($connection, $query);
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                      $i++;
                      $img =  $row['gallery_img'];
                    }

                    foreach ($result as $check) {
                      $img =  $check['gallery_img'];
                    

                    ?>
                      <div class="col-md-2 p-2">
                        <div class="project mb-3 card">
                          <img class="img-fluid" style="height: 200px; width:100%; object-fit:cover;" src="../<?php echo $img; ?>" alt="img">
                          <div class="overlay">
                            <div>


                              <div class="row">
                                <div class="edit-icons">
                                  <a href="admin-gallery-edit.php?id=<?php echo $id; ?>"><i class='fa fa-edit'></i></a>
                                </div>
                                <div class="trash-icons  ">
                                <a href="admin-gallery-delete.php?id=<?php echo $id; ?>"  title="Delete" id="delete"><i class='fa fa-trash'></i></a>

                                  <!-- <form action="admin-gallery-delete.php" method="post">
                                    <input type="hidden" name="delete_id" value="<?php //echo $id?>">
                                    <input type="hidden" name="delete_gallery" value="../<?php //echo $img?>">
                                    <button type="submit" name="del_gallery_submit" class="btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></button>

                                  </form> -->
                                </div>
                              </div>

                            </div>
                          </div>

                        </div>

                      </div> <?php      }
                              ?>

                  </div>
                  <!-- classroom query stop -->


                </div>
                <!-- CLASSROOM TAB -->


                <!-- HOSTEL TAB -->
                <div class="tab-pane fade" id="pills-hostel" role="tabpanel" aria-labelledby="pills-hostel-tab" tabindex="0">

                  <!-- hostel  query start -->
                  <div class="row">
                    <?php
                    $query = "SELECT * FROM gallery WHERE category = 'hostel'";
                    $result = mysqli_query($connection, $query);
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                      $i++;
                      $img =  $row['gallery_img'];
                    }

                    foreach ($result as $check) {
                      $img =  $check['gallery_img'];

                    ?>
                      <div class="col-md-2 p-2">
                        <div class="project mb-3 card">
                          <img class="img-fluid" style="height: 200px; width:100%;" src="../<?php echo $img; ?>" alt="img">
                          <div class="overlay">
                            <div>


                              <div class="row">
                                <div class="edit-icons  ">
                                  <a href="admin-gallery-edit.php?id=<?php echo $id; ?>"><i class='fa fa-edit'></i></a>
                                </div>
                                <div class="trash-icons  ">
                                <a href="admin-gallery-delete.php?id=<?php echo $id; ?>"  title="Delete" id="delete"><i class='fa fa-trash'></i></a>

                                  <!-- <form action="admin-gallery-delete.php" method="post">
                                    <input type="hidden" name="delete_id" value="<?php //echo $id?>">
                                    <input type="hidden" name="delete_gallery" value="../<?php //echo $img?>">
                                    <button type="submit" name="del_gallery_submit" class="btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></button>

                                  </form> -->
                                </div>
                              </div>

                            </div>
                          </div>

                        </div>

                      </div>
                    <?php      }
                    ?>

                  </div>
                  <!-- hostel query stop -->


                </div>
                <!-- HOSTEL TAB -->

                <!--LIBRARY TAB -->
                <div class="tab-pane fade" id="pills-library" role="tabpanel" aria-labelledby="pills-library-tab" tabindex="0">

                  <!-- library  query start -->
                  <div class="row">
                    <?php
                    $query = "SELECT * FROM gallery WHERE category = 'library'";
                    $result = mysqli_query($connection, $query);
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                      $i++;
                      $img =  $row['gallery_img'];
                    }

                    foreach ($result as $check) {
                      $img =  $check['gallery_img'];

                    ?>
                      <div class="col-md-2 p-2">
                        <div class="project mb-3 card">
                          <img class="img-fluid" style="height: 200px; width:100%;" src="../<?php echo $img; ?>" alt="img">
                          <div class="overlay">
                            <div>


                              <div class="row">
                                <div class="edit-icons  ">
                                  <a href="admin-gallery-edit.php?id=<?php echo $id; ?>"><i class='fa fa-edit'></i></a>
                                </div>
                                <div class="trash-icons  ">
                                <a href="admin-gallery-delete.php?id=<?php echo $id; ?>"  title="Delete" id="delete"><i class='fa fa-trash'></i></a>

                                </div>
                              </div>

                            </div>
                          </div>

                        </div>

                      </div>
                    <?php      }
                    ?>

                  </div>
                  <!-- library query stop -->


                </div>
                <!-- LIBRARY TAB -->

                <!-- LABORATORY TAB -->
                <div class="tab-pane fade" id="pills-laboratory" role="tabpanel" aria-labelledby="pills-laboratory-tab" tabindex="0">

                  <!-- laboratory  query start -->
                  <div class="row">
                    <?php
                    $query = "SELECT * FROM gallery WHERE category = 'laboratory'";
                    $result = mysqli_query($connection, $query);
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                      $i++;
                      $img =  $row['gallery_img'];
                    }

                    foreach ($result as $check) {
                      $img =  $check['gallery_img'];

                    ?>
                      <div class="col-md-2 p-2">
                        <div class="project mb-3 card">
                          <img class="img-fluid" style="height: 200px; width: 100%; " src="../<?php echo $img; ?>" alt="img">
                          <div class="overlay">
                            <div>


                              <div class="row">
                                <div class="edit-icons  ">
                                  <a href="admin-gallery-edit.php?id=<?php echo $id; ?>"><i class='fa fa-edit'></i></a>
                                </div>
                                <div class="trash-icons  ">
                                <a href="admin-gallery-delete.php?id=<?php echo $id; ?>" id="delete"><i class='fa fa-trash'></i></a>
                                 
                                </div>
                              </div>

                            </div>
                          </div>

                        </div>

                      </div>
                    <?php      }
                    ?>

                  </div>
                  <!-- laboratory query stop -->


                </div>
                <!-- LABORATORY TAB -->

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
<?php include("includes/footer.php");?>
<!-- footer stop -->
