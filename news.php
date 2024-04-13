<?php
include('includes/db.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>

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

            $query = "SELECT * FROM news WHERE status = 'published'";
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
                <h3 style="text-decoration: underline;">News</h3></h3>
                <?php
                foreach ($result as $news) {
                    $id = $news['id'];
                    $title = $news['title'];
                    $subtitle = $news['subtitle'];
                    $summary = $news['summary'];
                    $content = $news['content'];
                    $date = $news['date'];
                    $time = $news['time'];
                    $tag = $news['tag'];
                    $status = $news['status'];
                    $pic = $news['pic'];


                    // $title = substr($title, 0, 80);
                    (strlen($title)>20 ) ? $title = substr($title, 0, 80).'...': $title = $title;

                ?>
                    <div class="col-md-4 my-2">
                        <div class="blog-post card p-2" style="max-height: 38rem; max-width:100%">
                        <style>
                            .profile{
                                width: 100%;
                                height: 300px;
                                /* padding-top: 15px; */
                                text-align: center;
                                /* margin: auto; */

                            }
.profile img{
    background-image: url('<?php echo $news['pic'][0];?>');
    width:100%;
    height: 300px;
    background-position: top center;
}
                        </style>
                        <a href="news-read.php?id=<?php echo $id;?>" class="profile">    <img src="<?php echo $news['pic']; ?>" alt="blog-img" class="img-fluid"></a>
                            <h6 class="d-block">

                                <small class="mt-3" style="float: left;"><i class="fa fa-calendar" aria-hidden="true" style=" color: blue;"></i> <?php echo $date ?> </small>
                                <small class="mt-3" style="float: right;"><i class="fa fa-clock" aria-hidden="true" style=" color: blue;"></i> <?php echo $time; ?> </small>

                            </h6>
                            <br>
                            <p class="text-center" style="text-decoration: underline; font-size:small; height:20px;padding-bottom: 35px;text-align:justify;"><a href="news-read.php?id=<?php echo $id;?>"><?php echo $title ?></a> </p>
                            <p class="py-3"><small class="text-muted">Time posted: <?php echo $time?></small><a href="news-read.php?id=<?php echo $id; ?> " class="btn btn-sm btn-primary" style="float: right;"> Read More </a></p>
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