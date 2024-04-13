<?php include("includes/db.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>


    <!-- favicon -->
    <link rel="shortcut icon" href="ogo oluwa favicon/android-chrome-512x512.png" type="image/x-icon">
    <!-- favicon -->

    <!-- icon -->
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <!-- icon -->

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="bootstrap-icons-1.10.5/font/bootstrap-icons.min.css">
    <!-- bootstrap icon -->

    <link rel="stylesheet" href="css/news.css">


    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <!-- bootstrap -->
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
                        <?php
                        $id = $_GET['id'];
                        $query = "SELECT * FROM news WHERE id = '$id'";
                        $result = mysqli_query($connection, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $title = $row['title'];
                            $subtitle = $row['subtitle'];
                            $summary = $row['summary'];
                            $message = $row['content'];
                            $date = $row['date'];
                            $time = $row['time'];
                            $tag = $row['tag'];
                            $status = $row['status'];
                            $img = $row['pic'];
                        }

                        ?>
                        <style>
                            .profile {
                                width: 100%;
                                height: 300px;
                                /* padding-top: 15px; */
                                text-align: center;
                            }

                            .profile img {
                                background-image: url('<?php echo $img; ?>');
                                width: 100%;
                                height: 300px;
                                background-position: top center;
                                background-size: cover;
                                background-repeat: no-repeat;
                                /* object-fit: cover; */


                            }
                        </style>

                        <div class="card-header text-center" style=" background-color:  rgb(59, 15, 129);
                      color: white; height: 50px ;">
                            <h3>BREAKING NEWS</h3>
                        </div>

                        <!-- <div class="container-fluid"> -->

                        <div class="container py-2">
                            <div class="row mt-3 mb-2">
                                <div class="col-md-12" style="font-size:14px;"> News | <strong><?php echo $subtitle ?> </strong></div>
                                <div class="col-md-12" style="font-size:small;"><strong style="float: right; font-size:x-small;"> Date: <?php echo $date ?> | Time: <?php echo $time ?></strong></div>
                            </div>

                            <strong>
                                <h4 style="font-size:15px;"><?php echo $title ?></h4>
                            </strong>
                            <p>
                                <span style="font-weight: lighter; font-size:small;"> <?php echo $subtitle ?> </span>

                                <!-- news image -->

                                <span class="profile"> <img class="img-fluid" src="<?php echo $img ?>" alt="img"></span>

                                <!-- news image -->

                            <div class="" style="text-align: justify; font-size:small;"> <?php echo $message ?></div>

                            </p>


                        </div>
                    </div>
                </div>


                <!-- OTHER NEWS CARD -->

                <span class="mb-3 ">
                    <h5 class="
                            mt-3 py-3" style=" border-bottom: 5px solid rgb(59, 15, 129);border-top: 5px solid rgb(59, 15, 129);
                            ;"><i class="fa fa-newspaper" aria-hidden="true"></i> | OTHER NEWS</h5>
                </span>

                <div class="card mb-3">
                    <div class="row ms-2">
                        <?php
                        $query = "SELECT * FROM news WHERE status = 'published' AND id != '$id'";
                        $result = mysqli_query($connection, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                        }
                        foreach ($result as $news) {
                            $id = $news['id'];
                            $title = $news['title'];
                            $subtitle = $news['subtitle'];
                            $summary = $news['summary'];
                            $message = $news['content'];
                            $date = $news['date'];
                            $time = $news['time'];
                            $tag = $news['tag'];
                            $status = $news['status'];
                            $img = $news['pic'];


                            // $title = substr($title, 0, 99);
                            (strlen($title) > 19) ? $title = substr($title, 0, 65) . '...' : $title = $title;

                        ?>


                            <div class="col-md-4 my-2">
                                <style>
                                        /* .set {
                                            width: 100%;
                                            height: 200px;
                                            text-align: center;
                                        }

                                        .set img {
                                            background-image: url('<?php echo $img; ?>');
                                            width: 100%;
                                            height: 200px;
                                            background-position: center center;
                                            background-size: cover;
                                        } */
                                    </style>

                                <div class="blog-post card p-2" style="max-height: 38rem;">

                                    <a href="news-read.php?id=<?php echo $id; ?>" class="set"> <img src="<?php echo $img; ?>" alt="blog-img" class="img-fluid" style="height: 26rem; width: 100%; object-fit:cover"></a>

                                    <h6 class="d-block">

                                        <small class="mt-3" style="float: left; font-size:xx-small;"><i class="fa fa-calendar" aria-hidden="true" style=" color: blue;"></i> <?php echo $date; ?> </small>
                                        <small class="mt-3" style="float: right; font-size:xx-small;"><i class="fa fa-clock" aria-hidden="true" style=" color: blue;"></i> <?php echo $time; ?> </small>

                                    </h6>
                                    <br>
                                    <p class="text-center" style="text-decoration: underline; height:20px; padding-bottom:30px; font-size:small; "><a href="news-read.php?id=<?php echo $id; ?>"><?php echo $title ?></a> </p>
                                    <p class=""><small style="font-size: xx-small;">Time posted: <?php echo $time ?></small><a href="news-read.php?id=<?php echo $id; ?> " class="btn btn-sm btn-primary" style="float: right;"> Read More </a></p>
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




    <!-- body -->




    <!-- footer -->
    <?php require_once('includes/footer.php'); ?>
    <!-- footer -->


</body>

</html>