<?php

include('includes/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>


    <!-- favicon -->
    <link rel="shortcut icon" href="ogo oluwa favicon/android-chrome-512x512.png" type="image/x-icon">
    <!-- favicon -->

    <!-- icon -->
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <!-- icon -->

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="bootstrap-icons-1.10.5/font/bootstrap-icons.min.css">
    <!-- bootstrap icon -->

    <link rel="stylesheet" href="news.css">


    <?php include("includes/head.php"); ?>
</head>

<body>



    <!-- topbar -->
    <?php include('includes/topbar.php'); ?>
    <!-- topbar -->


    <!-- body -->

    <div class="container-fluid">
        <div class="container">
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
                                <a href="ads_guildlines.php" class="btn btn-light mb-2 "> Admission Guildlines </a>
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
                    <div class="card mt-3 mb-3">

                        <!-- <div class="container-fluid"> -->
                        <?php
                        $id = $_GET['id'];
                        $query = "SELECT * FROM event WHERE id = '$id'";
                        $result = mysqli_query($connection, $query);

                        //   if(mysqli_num_rows($result)>0){
                        while ($row = mysqli_fetch_assoc($result)) {
                            $title = $row['event_title'];
                            $time = $row['event_time'];
                            $date = $row['event_date'];
                            $img = $row['event_img'];
                            $message = $row['event_message'];
                            $tag = $row['event_tag'];
                            $title = $row['event_title'];
                            $poster = $row['event_poster_name'];
                            $posted_time = $row['time_posted'];
                        }
                        //   }    

                        ?>

                        <div class="card-header text-center" style=" background-color:  rgb(59, 15, 129);
                          color: white; height: 50px ;">
                            <h3>EVENTS</h3>
                        </div>

                        <!-- <div class="container"> -->
                        <div class="row">


                            <div class="container py-2">
                                <div class="row ">
                                    <style>
                                        .profile {
                                            width: 100%;
                                            height: 290px;
                                            text-align: center;
                                        }

                                        .profile img {
                                            background-image: url('<?php echo $news['pic'][0]; ?>');
                                            width: 100%;
                                            height: 300px;
                                            background-position: top center;
                                        }
                                    </style>
                                    <div class="col text-end" style="font-size:x-small;"><strong> Date: <?php echo $date ?> | Time: <?php echo $time; ?></strong></div>
                                </div>

                                <strong>
                                    <h4 class="text-center px-2" style="text-decoration: underline; color:rgb(59, 15, 129); font-size:20px; text-align:justify;"><?php echo $title; ?></h4>
                                </strong>
                                <p>
                                    <!-- news image -->

                                    <span class="profile"> <img class="img-fluid px-3" src="<?php echo $img ?>" alt="img">
                                    </span>
                                    <!-- news image -->

                                <div class="px-3" style="text-align: justify; font-size:16px;"> <?php echo $message; ?>
                                </div>
                                <small class="text-muted" style="float: right; padding: 12px;">Time posted: <?php echo $posted_time ?></small>
                                </p>

                            </div>

                        </div>
                    </div>
                </div>


                <!-- OTHER NEWS CARD -->
                <span class="mb-3 ">
                    <h5 class="
                    mt-3 py-3" style=" border-bottom: 5px solid rgb(59, 15, 129);border-top: 5px solid rgb(59, 15, 129);
              ;"><i class="fa fa-newspaper" aria-hidden="true"></i> | OTHER EVENTS</h5>
                        </span>
                        
                        <div class="card mb-3">
        
                            <div class="row">
                        <?php
                        $query = "SELECT * FROM event WHERE event_status = 'published' AND id != '$id'";
                        $result = mysqli_query($connection, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                        }

                        foreach ($result as $events) {
                            $message =  $events['event_message'];
                            $title = $events['event_title'];
                            $id = $events['id'];
                            $img = $events['event_img'];
                            $title = $events['event_title'];
                            $title = $events['event_title'];
                            $time = $events['time_posted'];

                            
                            (strlen($title) > 44) ? $title = substr($title, 0, 30) . '...' : $title = $title;
                            ?>
                            <div class="col-md-4 my-3">
                                <div class="blog-post card p-2" style="max-height: 38rem; box-sizing:border-box;">
                                    <a href="event-read.php?id=<?php echo $id ?>" class="profile"> <img src="<?php echo $events['event_img']; ?>" alt="blog-img" class="img-fluid"></a>
                                    <h6 class="d-block">

                                        <small class="" style="float: left; font-size:x-small;"><i class="fa fa-calendar" aria-hidden="true" style=" color: blue;"></i> <?php echo $events['event_date']; ?> </small>
                                        <small class="" style="float: right;font-size:x-small;"><i class="fa fa-clock" aria-hidden="true" style=" color: blue;"></i> <?php echo $events['event_time']; ?> </small>

                                    </h6>
                                    <!-- <br> -->
                                    <p class="text-center" style="text-decoration: underline; font-size:16px;"><a href="event-read.php?id=<?php echo $id ?>"><?php echo $title ?></a></p>
                                    <p class=""> <small class="text-muted">Time posted: <?php echo $time ?></small> <a href="event-read.php?id=<?php echo $id; ?>" class="text-end btn btn-sm btn-primary" style="float: right; font-size:x-small;"> Read More </a></p>
                                </div>
                            </div>

                        <?php   }

                        ?>



                    </div>
                </div>
                

                <!-- OTHER NEWS CARD -->






            </div>




        </div>


    </div>
    </div>

    <!-- body -->




    <!-- footer -->
    <!-- footer -->


</body>
<?php require_once('includes/footer.php'); ?>

<!-- </html> -->