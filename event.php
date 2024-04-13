<?php
include('includes/db.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>

    <?php include('includes/head.php'); ?>


</head>

<body>


    <!-- topbar -->
    <?php include('includes/topbar.php'); ?>
    <!-- topbar -->



    <!-- body -->


    <div class="container-fluid">


        <div class="container">
            <!-- <h2 class="mb-3">ADMISSION FORM</h2> -->

            <?php

            $query = "SELECT * FROM event WHERE event_status = 'published'";
            $result = mysqli_query($connection, $query);
            // if(mysqli_num_rows($result) == 1){
            while ($row = mysqli_fetch_assoc($result)) {
                // $title = $row['event_title'];
                // $message = $row['event_message'];
                // $id = $row['id'];
                // $img = $row['event_img'];
                // $title = $row['event_title'];
                // $title = $row['event_title'];
            }
            // }

            ?>

            <!--Upcoming event CARD -->
            <div class="row my-3">
                <h3 style="text-decoration: underline;">Upcoming Events</h3>
                <?php
                foreach ($result as $events) {
                    $message =  $events['event_message'];
                    $title = $events['event_title'];
                    $id = $events['id'];
                    $img = $events['event_img'];
                    $time = $events['time_posted'];
                    $title = $events['event_title'];


                    // $message1 = substr($message, 0, 50);
                    (strlen($title)>44 ) ? $title = substr($title, 0, 39).'...': $title = $title;

                ?>
                    <div class="col-md-4 my-2">
                        <style>
                          .profile{
                                width: 100%;
                                height: 290px;
                                text-align: center;
                            }
.profile img{
    background-image: url('<?php echo $news['pic'][0];?>');
    width:100%;
    height: 300px;
    background-position: top center;
}


                        </style>
                        <div class="blog-post card p-1" style="max-height: 39rem; width:100%">
                          <a href="event-read.php?id=<?php echo $id;?>" class="profile">  <img src="<?php echo $img; ?>" alt="blog-img" class="img-fluid"></a>
                            <h6 class="d-block">

                                <small class="m" style="float: left; font-size:x-small;"><i class="fa fa-calendar" aria-hidden="true" style=" color: blue;"></i> <?php echo $events['event_date']; ?> </small>
                                <small class="" style="float: right; font-size:x-small;"><i class="fa fa-clock" aria-hidden="true" style=" color: blue;"></i> <?php echo $events['event_time']; ?> </small>

                            </h6>
                            <!-- <br> -->
                            <p class="text-center" style="text-decoration: underline; "><a href="event-read.php?id=<?php echo $id;?>"><?php echo $title ?></a> </p>
                            <p class=" mt-3"><small class="text-muted">Time posted: <?php echo $time?></small><a href="event-read.php?id=<?php echo $id; ?> " class="btn btn-sm btn-primary" style="float: right; font-size:x-small;"> Read More </a></p>
                            <p><?php ?></p>
                        </div>
                    </div>

                <?php   }

                ?>

            </div>
            <!--Upcoming event CARD -->

        </div>
    </div>



    <!-- body -->




    <!-- footer -->
    <?php require_once('includes/footer.php'); ?>
    <!-- footer -->


</body>

</html>