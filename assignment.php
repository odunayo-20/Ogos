<?php
include('includes/db.php');
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>

    <?php include('includes/head.php'); ?>

</head>

<body>


    <!-- topbar -->
    <?php include('includes/topbar.php'); ?>
    <!-- topbar -->



    <!-- body -->


    <div class="container-fluid">


        <!-- <div class="container"> -->
            <!-- <h2 class="mb-3">ADMISSION FORM</h2> -->


            <div class="row">
                <!--Upcoming event CARD -->
                <!-- accordion start -->
                <!-- <div class="col-md-12"> -->


                <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="text-center">Assignment</h4>
                  </div>
                  <div class="card-body">
                    <ul class="nav nav-pills" id="myTab3" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab"
                          aria-controls="home" aria-selected="true">JSS1</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab"
                          aria-controls="profile" aria-selected="false">JSS2</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact1" role="tab"
                          aria-controls="contact" aria-selected="false">JSS3</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact2" role="tab"
                          aria-controls="contact" aria-selected="false">SS1</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab"
                          aria-controls="contact" aria-selected="false">SS2</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact4" role="tab"
                          aria-controls="contact" aria-selected="false">SS3</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent2">
                      <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                    
                      <div class="col-md-12">

<div class="card my-3 table-responsive">
    <p class="text-center text-primary">JSS1 Assignment</p>
    <table class="table table-striped">
        <tr>
            <th>S/N</th>
            <th>Teacher Name</th>
            <th>Class</th>
            <th>Subject</th>
            <th>Date To Be Submitted</th>
            <th>Document</th>
        </tr>
        <tr>

            <?php

            $query = "SELECT * FROM assignment WHERE status = 'published' AND class = 'JSS1'";
            $result = mysqli_query($connection, $query);
            // if(mysqli_num_rows($result) == 1){
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['name'];
                $class = $row['class'];
                $date = $row['dateS'];
                $subject = $row['subject'];
                $document = $row['document'];
                $class = $row['class'];
                $id = $row['id'];
                $i++;
            ?>
                <td><?php echo $i; ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $class ?></td>
                <td><?php echo $subject ?></td>
                <td><?php echo $date ?></td>
                <td><a href="download.php?path=<?php echo $document ?>"><i class="fa fa-download" aria-hidden="true"></i></a></td>
        </tr>
    <?php }

    ?>

    </table>
</div>
</div>
<!--Upcoming event CARD -->

                    </div>
                      <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                                <!--Upcoming event CARD -->
                                <div class="col-md-12">

                                    <div class="card my-3 table-responsive">
                                        <p class="text-center text-primary">JSS2 Assignment</p>
                                        <table class="table table-striped">
                                            <tr>
                                                <th>S/N</th>
                                                <th>Teacher Name</th>
                                                <th>Class</th>
                                                <th>Subject</th>
                                                <th>Date To Be Submitted</th>
                                                <th>Document</th>
                                            </tr>
                                            <tr>

                                                <?php

                                                $query = "SELECT * FROM assignment WHERE status = 'published' AND class = 'JSS2'";
                                                $result = mysqli_query($connection, $query);
                                                // if(mysqli_num_rows($result) == 1){
                                                $i = 0;
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $name = $row['name'];
                                                    $class = $row['class'];
                                                    $date = $row['dateS'];
                                                    $subject = $row['subject'];
                                                    $document = $row['document'];
                                                    $class = $row['class'];
                                                    $id = $row['id'];
                                                    $i++;
                                                ?>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $name ?></td>
                                                    <td><?php echo $class ?></td>
                                                    <td><?php echo $subject ?></td>
                                                    <td><?php echo $date ?></td>
                                                    <td><a href="download.php?path=<?php echo $document ?>"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                            </tr>
                                        <?php }

                                        ?>

                                        </table>
                                    </div>
                                </div>
                                <!--Upcoming event CARD -->

                      </div>
                      <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab3">
                                <!--Upcoming event CARD -->
                                <div class="col-md-12">

                                    <div class="card my-3 table-responsive">
                                        <p class="text-center text-primary">JSS3 Assignment</p>
                                        <table class="table table-striped">
                                            <tr>
                                                <th>S/N</th>
                                                <th>Teacher Name</th>
                                                <th>Class</th>
                                                <th>Subject</th>
                                                <th>Date To Be Submitted</th>
                                                <th>Document</th>
                                            </tr>
                                            <tr>

                                                <?php

                                                $query = "SELECT * FROM assignment WHERE status = 'published' AND class = 'JSS3'";
                                                $result = mysqli_query($connection, $query);
                                                // if(mysqli_num_rows($result) == 1){
                                                $i = 0;
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $name = $row['name'];
                                                    $class = $row['class'];
                                                    $date = $row['dateS'];
                                                    $subject = $row['subject'];
                                                    $document = $row['document'];
                                                    $class = $row['class'];
                                                    $id = $row['id'];
                                                    $i++;
                                                ?>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $name ?></td>
                                                    <td><?php echo $class ?></td>
                                                    <td><?php echo $subject ?></td>
                                                    <td><?php echo $date ?></td>
                                                    <td><a href="download.php?path=<?php echo $document ?>"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                            </tr>
                                        <?php }

                                        ?>

                                        </table>
                                    </div>
                                </div>
                                <!--Upcoming event CARD -->

                      </div>
                      <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab4">
                                <!--Upcoming event CARD -->
                                <div class="col-md-12">

                                    <div class="card my-3 table-responsive">
                                        <p class="text-center text-primary">SS1 Assignment</p>
                                        <table class="table table-striped">
                                            <tr>
                                                <th>S/N</th>
                                                <th>Teacher Name</th>
                                                <th>Class</th>
                                                <th>Subject</th>
                                                <th>Date To Be Submitted</th>
                                                <th>Document</th>
                                            </tr>
                                            <tr>

                                                <?php

                                                $query = "SELECT * FROM assignment WHERE status = 'published' AND class = 'SS1'";
                                                $result = mysqli_query($connection, $query);
                                                // if(mysqli_num_rows($result) == 1){
                                                $i = 0;
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $name = $row['name'];
                                                    $class = $row['class'];
                                                    $date = $row['dateS'];
                                                    $subject = $row['subject'];
                                                    $document = $row['document'];
                                                    $class = $row['class'];
                                                    $id = $row['id'];
                                                    $i++;
                                                ?>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $name ?></td>
                                                    <td><?php echo $class ?></td>
                                                    <td><?php echo $subject ?></td>
                                                    <td><?php echo $date ?></td>
                                                    <td><a href="download.php?path=<?php echo $document ?>"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                            </tr>
                                        <?php }

                                        ?>

                                        </table>
                                    </div>
                                </div>
                                <!--Upcoming event CARD -->
                      </div>
                      <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab4">
                                <!--Upcoming event CARD -->
                                <div class="col-md-12">
                                    <div class="card my-3 table-responsive">
                                        <p class="text-center text-primary">SS2 Assignment</p>
                                        <table class="table table-striped">
                                            <tr>
                                                <th>S/N</th>
                                                <th>Teacher Name</th>
                                                <th>Class</th>
                                                <th>Subject</th>
                                                <th>Date To Be Submitted</th>
                                                <th>Document</th>
                                            </tr>
                                            <tr>

                                                <?php

                                                $query = "SELECT * FROM assignment WHERE status = 'published' AND class = 'SS2'";
                                                $result = mysqli_query($connection, $query);
                                                // if(mysqli_num_rows($result) == 1){
                                                $i = 0;
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $name = $row['name'];
                                                    $class = $row['class'];
                                                    $date = $row['dateS'];
                                                    $subject = $row['subject'];
                                                    $document = $row['document'];
                                                    $class = $row['class'];
                                                    $id = $row['id'];
                                                    $i++;
                                                ?>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $name ?></td>
                                                    <td><?php echo $class ?></td>
                                                    <td><?php echo $subject ?></td>
                                                    <td><?php echo $date ?></td>
                                                    <td><a href="download.php?path=<?php echo $document ?>"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                            </tr>
                                        <?php }

                                        ?>

                                        </table>
                                    </div>
                                </div>
                                <!--Upcoming event CARD -->

                      </div>
                      <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">
                                <!--Upcoming event CARD -->
                                <div class="col-md-12">
                                    <div class="card my-3 table-responsive">
                                        <p class="text-center text-primary">SS3 Assignment</p>
                                        <table class="table table-striped">
                                            <tr>
                                                <th>S/N</th>
                                                <th>Teacher Name</th>
                                                <th>Class</th>
                                                <th>Subject</th>
                                                <th>Date To Be Submitted</th>
                                                <th>Document</th>
                                            </tr>
                                            <tr>

                                                <?php

                                                $query = "SELECT * FROM assignment WHERE status = 'published' AND class = 'SS3'";
                                                $result = mysqli_query($connection, $query);
                                                // if(mysqli_num_rows($result) == 1){
                                                $i = 0;
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $name = $row['name'];
                                                    $class = $row['class'];
                                                    $date = $row['dateS'];
                                                    $subject = $row['subject'];
                                                    $document = $row['document'];
                                                    $class = $row['class'];
                                                    $id = $row['id'];
                                                    $i++;
                                                ?>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $name ?></td>
                                                    <td><?php echo $class ?></td>
                                                    <td><?php echo $subject ?></td>
                                                    <td><?php echo $date ?></td>
                                                    <td><a href="download.php?path=<?php echo $document ?>"><i class="fa fa-download" aria-hidden="true"></i></a></td>
                                            </tr>
                                        <?php }

                                        ?>

                                        </table>
                                    </div>
                                </div>
                                <!--Upcoming event CARD -->

                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <!-- </div> -->

                <!-- accordion stop -->

            </div>
        </div>
    </div>



    <!-- body -->





    <?php require_once('includes/footer.php'); ?>
    <!-- footer -->


</body>

</html>