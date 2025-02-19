<?php include("includes/db.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> OGOOLUWA</title>


    <?php include('includes/head.php'); ?>
</head>

<body>



    <!-- topbar -->
    <?php include('includes/topbar.php'); ?>
    <!-- topbar -->



    <!-- banner -->

    <div class="carousel slide mb-1" id="hero-carousel" data-bs-ride="carousel" class="vw-100">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" aria-label="Slide 0" class="active">
            </button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 1">
            </button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 2">
            </button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="banner/school banner/1684322091764.jpg" alt="banner1" class="d-block w-100 c-img">
                <div class="carousel-caption">
                    <h3>You're Welcome</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    <div class="btn btn-primary">
                        <a href="#"> Learn more</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="banner/school banner/1684322087370.jpg" alt="banner2" class="d-block w-100 c-img">
                <div class="carousel-caption">
                    <h3>You're Welcome</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    <div class="btn btn-primary">
                        <a href="#"> Learn more</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="banner/school banner/1684321981260.jpg" alt="banner3" class="d-block w-100 c-img">
                <div class="carousel-caption">
                    <h3>You're Welcome</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    <div class="btn btn-primary">
                        <a href="#"> Learn more</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-button">
            <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- banner -->

    <!-- admin-message -->

    <div class="container-fluid  admin-message mb-2">

        <div class="container">
            <div class="card mb-3 mx-auto">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase" style="font-style: oblique; font-size: medium; font-weight: bolder; text-decoration: underline 2px solid rgb(59, 15, 129);;">
                                From the director-general desk</h5>
                            <p class="card-text">Ogo-oluwa Group of Schools was established in 25th September, 1998.
                                The school was founded out of zeal for academic excellence. The school started in
                                form of nursery school with three students and four teachers. Since the
                                establishment of the school, it has achieved a lot of developments and advancements
                                in terms of structures, learning facilities and students performance. The school
                                presently has two campuses: one at Emure-Ile behind Obada market and the other at
                                Oke Uso. Ogo-Oluwa Group of Schools is co-educational with boarding facilities.
                                Presently, Ogo-Oluwa Group of Schools is one of the best private schools in Nigeria.
                                The general function of the school is to provide necessary materials needed for
                                effective teaching and learning. This function can be seen in the availability of
                                standard Laboratories, Library and workshop provided for the students.
                            </p>
                            <h6 class="card-text ">Engr P.O. Ojo B.eng (Benin); M.Eng (Benin), MNSE,MIRDI,FHRD,MNI
                                Mech E, C.Eng, R.Eng. (COREN)
                            </h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="images/prop.jpg" class="img-responsive " style="width: 100%; height: 400px;" alt="image">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- admin-message -->

    <!-- about -->
<div class="container-fluid bg-light">
    <div class="container">

        <section class="row py-0 bg-light mb-1" id="about">
            <div class="col-lg-6 col-img"></div>
            <div class="col-lg-6 py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h6 class="text-primary">Why to choose us?</h6>
                            <h2 class="mb-3">Best academia for your children!</h3>

                                <div class="feature d-flex">
                                    <div class="iconbox me-2 justify-content-center">
                                        <!-- <i class='bx bxs-download'></i> -->
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                                    </div>
                                    <div>
                                        <h5>Clubs and Socialities </h5>
                                        <p>The formation of clubs and societies by students help to enhance the
                                            intellectual, social and cultural development of its members. The clubs develop
                                            talents and leadership qualities in students, help the students to work in teams
                                            and enhance national integration.</p>
                                    </div>
                                </div>
                                <div class="feature d-flex">
                                    <div class="iconbox me-2 justify-content-center">
                                        <!-- <i class='bx bxs-comment-edit'></i> -->
                                        <!-- <i class="bi-dorm"></i> -->
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h5>Boarding Facility </h5>
                                        <p>Here are male and female hostels located in the school premises. The hostels are
                                            spacious and are well furnished. The necessary facilities in the boarding house
                                            which have helped to achieve the comfortability of the students. Its literarily
                                            a HOME AWAY FROM HOME. </p>
                                    </div>
                                </div>
                                <div class="feature d-flex">
                                    <div class="iconbox me-2 justify-content-center">
                                        <!-- <i class='bx bxs-download'></i> -->
                                        <i class="fa fa-hospital" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h5>Health Center </h5>
                                        <p>The school have nurses to attend to first aids and general ailment requiring no
                                            specialist attention. Serious ailment and emergences are sent to outside
                                            hospitals to which school is affiliated. Students who cannot respond to
                                            intensive treatment from the system are sent back their parents for further
                                            investigations.</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </section>


    </div>
    <!-- about -->

    <!-- services -->
    <div class="services  d-flex  align-items-center mb-1" id="services" style="height: auto;">
        <div class="container">
            <div class="col-lg-7 mx-auto text-center">
                <h1 class="display-4 text-white"> OUR FACILITIES </h1>
                <p class="text-white my-3 ">
                    Students of Ogo Oluwa Group of Schools are exposed to a series of well-articulated practical
                    sessions in the course of their study. Teaching is synchronized with practical classes to facilitate
                    teaching and learning. We develop students with balanced knowledge. Apart from science laboratories,
                    the school has laboratories for language, electronics, introductory technology, computing and
                    typewriting. This is unprecedented and unrivalled within and outside the country.
                </p>


            </div>
            <div class="row  mb-2 ">
                <div class="col col-lg-3 col-md-3 col-sm-3 b-2  mx-auto text-center">
                    <div class="icon mt-2 mx-auto">
                        <i class="fa fa-sun" aria-hidden="true"></i>
                    </div>
                    <br>
                    HIGH STANDARDS & VERY AFFORDABLE
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3  mx-auto text-center">
                    <div class="icon mt-2 mx-auto">
                        <i class="fas fa-school" aria-hidden="true"></i>
                    </div>
                    <br>
                    CONDUCIVE AND MODERN CLASSROOM
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3  mx-auto text-center">
                    <div class="icon mt-2 mx-auto"">
                        <i class=" fa fa-lightbulb" aria-hidden="true"></i>
                    </div>
                    <br>
                    ENTERPRENEUR SKILL AQUISITION DEVELOPMENT
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3  mx-auto text-center">
                    <div class="icon mt-2 mx-auto">
                        <i class="fa fa-bus" aria-hidden="true"></i>
                    </div>
                    <br>
                    SCHOOL BUS SERVICE
                </div>
            </div>
            <div class="row mt-3 text-light mb-3">
                <div class="col col-lg-3 col-md-3 col-sm-3  mx-auto text-center">
                    <div class="icon mt-2 mx-auto">

                        <i class="fa fas fa-money-check-alt" aria-hidden="true"></i>
                    </div>
                    <br>
                    CONVENIENT PAYMENT PLATFORMS
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3  mx-auto text-center">
                    <div class="icon mt-2 mx-auto">
                        <i class="fa fa-video-camera" aria-hidden="true"></i>
                    </div>
                    <br>
                    SECURITY (CCTV CAMERAS,ETC)
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3  mx-auto text-center">
                    <div class="icon mt-2 mx-auto">
                        <i class="fas fa-thumbs-up" aria-hidden="true"></i>
                    </div>
                    <br>
                    APPROPRIATE TEACHING AIDS
                </div>
                <div class="col col-lg-3 col-md-3 col-sm-3  mx-auto text-center">
                    <div class="icon mt-2 mx-auto">
                        <i class="far fas fa-university" aria-hidden="true"></i>
                    </div>
                    <br>
                    GREAT ENVIRONMENT & LANDSCAPE
                </div>
            </div>

        </div>
    </div>
    <!-- services -->

    <!-- gallery -->

    <div class="container-fluid gallery mb-1 py-2" id="gallery">
        <div class="container">
            <div class="row g-3 ">
                <h4 class="gal-text text-center"> ----- Picture Archieve ----- </h4>

                <?php 
                $query = "SELECT * FROM gallery WHERE category = 'classroom' order by id desc LIMIT 1";
                $result = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($result)){
                    $category = $row['category'];
                    $img = $row['gallery_img'];
                    ?>
                <div class="col-md-3 ">
                    <div class="project mb-3 text-center">
                        <img src="<?php echo $img;?>" alt="" class="img-fluid card-img-bottom" style="height:25rem; width:100%;">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white"><?php echo strtoupper($category);?></h4>
                                <h6 class="text-white"><a href="gallery.php#pills-classroom" style="color: white;">See
                                        more...</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
<?php            }
                
                ?>

                <?php 
                $query = "SELECT * FROM gallery WHERE category = 'hostel' order by id desc LIMIT 1";
                $result = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($result)){
                    $category = $row['category'];
                    $img = $row['gallery_img'];
                    ?>
                <div class="col-md-3 ">
                    <div class="project mb-3">
                        <img src="<?php echo $img;?>" alt="" class="img-fluid vh-50 vw-100" style="height:25rem; width:100%;">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white"><?php echo strtoupper($category);?></h4>
                                <h6 class="text-white"><a href="gallery.php#pills-classroom" style="color: white;">See
                                        more...</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
<?php            }
                
                ?>

                <?php 
                $query = "SELECT * FROM gallery WHERE category = 'library' order by id desc LIMIT 1";
                $result = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($result)){
                    $category = $row['category'];
                    $img = $row['gallery_img'];
                    ?>
                <div class="col-md-3 ">
                    <div class="project mb-3">
                        <img src="<?php echo $img;?>" alt="" style="height:25rem; width:100%;">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white"><?php echo strtoupper($category);?></h4>
                                <h6 class="text-white"><a href="gallery.php#pills-classroom" style="color: white;">See
                                        more...</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
<?php            }
                
                ?>

                <?php 
                $query = "SELECT * FROM gallery WHERE category = 'laboratory' order by id desc LIMIT 1";
                $result = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($result)){
                    $category = $row['category'];
                    $img = $row['gallery_img'];
                    ?>
                <div class="col-md-3 ">
                    <div class="project mb-3">
                        <img src="<?php echo $img;?>" alt="" class="img-fluid vh-50 vw-100" style="height:25rem; width:100%;">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white"><?php echo strtoupper($category);?></h4>
                                <h6 class="text-white"><a href="gallery.php#pills-classroom" style="color: white;">See
                                        more...</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
<?php            }
                
                ?>

                <!-- <div class="col-md-3 ">
                    <div class="project mb-3">
                        <img src="images/1684163790435.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Hostel</h4>

                                <h6 class="text-white"><a href="gallery.php" style="color: white;">See
                                        more...</a></h6>
                            </div>
                        </div>
                    </div>
                </div> -->



            </div>
        </div>
    </div>

    <!-- gallery -->


    <!-- blog -->

    <section id="blog" class="bg-light mb-">
        <div class="container">
            <div class="row mb-">
                <div class="col-md-8 mx-auto text-center">
                    <h2 class="text-primary">BLOG</h2>
                    <h1>Latest news from the school</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi mollitia tempora, vero, ab
                        voluptas quod
                        necessitatibus assumenda delectus nam hic similique eveniet.
                    </p>
                </div>
            </div>
            <!-- News CARD -->
            <div class="row mb-2" id="news">
            <?php

$query = "SELECT * FROM news WHERE status = 'published' order by id desc LIMIT 3 ";
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

                <h2 class="text-center" style="text-decoration: underline;">NEWS</h2>
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


                    // $title = substr($title, 0, 100);
                    (strlen($title)>44 ) ? $title = substr($title, 0, 39).'...': $title = $title;

                ?>
                    <div class="col-md-4 my-2">
                        <div class="blog-post card p-2" style="max-height: 39rem;">
                            <img src="<?php echo $pic; ?>" alt="blog-img" class="img-fluid vh-" style="object-fit:cover; height:26rem; width:100%;">

                            <h6 class="d-block">

                                <small class="mt-3" style="float: left;"><i class="fa fa-calendar" aria-hidden="true" style=" color: blue;"></i> <?php echo $date ?> </small>
                                <small class="mt-3" style="float: right;"><i class="fa fa-clock" aria-hidden="true" style=" color: blue;"></i> <?php echo $time; ?> </small>

                            </h6>
                            <br>
                            <p class="text-center" ><a href="news-read.php?id=<?php echo $id;?>"><?php echo $title ?></a> </p>
                            <p class=" my-3"><small class="text-muted">Time posted: <?php echo $time?></small><a href="news-read.php?id=<?php echo $id; ?> " class="btn btn-primary" style="float: right;"> Read More </a></p>
                            <p><?php ?></p>
                        </div>
                    </div>

                <?php   }

                ?>

            </div>

            <!-- // News CARD -->

            <h2 class="text-center" id="event" style="text-decoration: underline;">EVENTS</h2>

            <?php

            $query = "SELECT * FROM event WHERE event_status = 'published'  order by id desc LIMIT 3";
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
            <div class="row mt-2">
                <h3 style="text-decoration: underline;">Upcoming Events</h3>
                <?php
                foreach ($result as $events) {
                    $message =  $events['event_message'];
                    $title = $events['event_title'];
                    $id = $events['id'];
                    $img = $events['event_img'];
                    $time = $events['time_posted'];
                    $title = $events['event_title'];

                    (strlen($title)>44 ) ? $title = substr($title, 0, 39).'...': $title = $title;

                    // $title = substr($title, 0, 100);
                ?>
                    <div class="col-md-4 mt-2">
                        <div class="blog-post card p-2" style="max-height: 39rem;">
                            <img src="<?php echo $events['event_img']; ?>" alt="blog-img" class="img-fluid" style="height: 26rem; width:100%; object-fit:cover;">
                            <h6 class="d-block">

                                <small class="mt-3" style="float: left;"><i class="fa fa-calendar" aria-hidden="true" style=" color: blue;"></i> <?php echo $events['event_date']; ?> </small>
                                <small class="mt-3" style="float: right;"><i class="fa fa-clock" aria-hidden="true" style=" color: blue;"></i> <?php echo $events['event_time']; ?> </small>

                            </h6>
                            <br>
                            <p class="text-center"><a href="event-read?phpid=<?php echo $id; ?>"><?php echo $title ?></a> </p>
                            <p class="my-3"><small class="text-muted">Time posted: <?php echo $time ?></small><a href="event-read.php?id=<?php echo $id; ?>" style="float: right;" class="btn btn-primary"> Read More </a></p>
                            <p><?php ?></p>
                        </div>
                    </div>

                <?php   }

                ?>

            </div>
            <!--Upcoming event CARD -->

            <!-- Testimonies -->

            <!-- Testimonies -->
        </div>
    </section>

    <!-- blog -->

    <!-- contact-us
    <div class="container-fluid bg-light  message mb-2" id="contact">
        <div class=" container">
            <h3 class=" py-2">
                SPEAK TO US:
            </h3>
        </div>


        <div class="container">

            <form>

                <div class="row mb-3">
                    <div class="col-6 justify-content-start ">
                        <div class="form-floating">
                            <input type="text" id="name" class="form-control " placeholder="put name here">
                            <label for="name" class="form-label">Your name</label>
                        </div>

                        <div class="form-floating">
                            <input type="email" id="email" class="form-control" placeholder="put email here">
                            <label for="email">Your email</label>
                        </div>

                        <div class="form-floating">
                            <input type="text" id="subject" class="form-control" placeholder="put subject here">
                            <label for="subject" class="form-label">Your subject</label>
                        </div>



                    </div>

                    <div class="col-6 justify-content-end ">

                        <div class="form-floating">
                            <textarea class="form-control" placeholder="put message here" name="message" id="message"
                                cols="30" rows="30" style="height: 200px;"></textarea>
                            <label for="text-area">Your message</label>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 justify-content-start">*All fields are mandatory</div>
                    <div class="col-6 justify-content-end">
                        <button class="btn btn-primary " type="submit">Submit</button>
                    </div>
                </div>


            </form>

        </div>












    </div> -->
    <!-- contact-us -->

    <!-- footer -->
    <?php require_once('includes/footer.php'); ?>
    <!-- footer -->














    <!-- bootstrap js -->
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
    <!-- bootstrap js -->
</body>

</html>