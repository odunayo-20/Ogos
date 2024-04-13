<?php include("includes/db.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


    <?php include('includes/head.php'); ?>
</head>

<body>



    <!-- topbar -->
    <?php include('includes/topbar.php'); ?>
    <!-- topbar -->



    <!-- about -->
<div class="container-fluid bg-light">

    <div class="container">

        <section class="row py-0 my-1" id="about">
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





    <!-- footer -->
    <?php require_once('includes/footer.php'); ?>
    <!-- footer -->














    <!-- bootstrap js -->
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
    <!-- bootstrap js -->
</body>

</html>