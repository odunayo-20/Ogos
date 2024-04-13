<?php 
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>


    <!-- head -->
    <?php include("includes/head.php");?>
</head>

<body>



    <!-- topbar -->
    <?php include('includes/topbar.php'); ?>

    <!-- topbar -->

    <!-- body -->
    <!-- <div class="container-fluid"> -->
        <!-- form -->
        <div class="container-fluid bg-light  message mb-2" id="contact">
            <div class=" container">
                <h3 class=" py-2">
                    SPEAK TO US:
                </h3>
            </div>


            <div class="container">

                <form action="contact-process.php" method="post" enctype="multipart/form-data">
                <?php 
                if(isset($_SESSION['success'])){
                  echo($_SESSION['success']);
                  unset($_SESSION['success']);
                }
                if(isset($_SESSION['error'])){
                  echo($_SESSION['error']);
                  unset($_SESSION['error']);
                }
                ?>

                    <div class="row mb-3">
                        <div class="col-md-6  justify-content-start ">
                            <div class="form-floating">
                                <input type="text" id="name" name="name" class="form-control " placeholder="put name here" value="<?php echo $name?>">
                                <label for="name" class="form-label">Your name</label>
                            </div>

                            <div class="form-floating">
                                <input type="email" id="email" name="email" class="form-control" placeholder="put email here" value="<?php echo $email?>">
                                <label for="email">Your email</label>
                            </div>

                            <div class="form-floating">
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="put subject here" value="<?php echo $subject?>">
                                <label for="subject" class="form-label">Your subject</label>
                            </div>



                        </div>

                        <div class="col-md-6  justify-content-end ">

                            <div class="form-floating">
                                <textarea class="form-control" placeholder="put message here" name="message" id="message" cols="30" rows="30" style="height: 200px; resize:none"><?php echo $message?></textarea>
                                <label for="text-area">Your message</label>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12 justify-content-start">*All fields are mandatory</div>
                        <div class="col-md-6 col-sm-12 justify-content-end">
                            <button class="btn btn-primary mb-3 col-sm-12 col-md-3" type="submit">Submit</button>
                        </div>
                    </div>


                </form>

            </div>












        </div>
        <!-- form -->
    <!-- </div> -->

    <!-- address -->
    <div class="container-fluid my-3">
        <div class="container">
            <div class="row" >
                <div class="card col-md-6 py-3" >
                    <div class="address mb-5">
                        <strong>
                            <h4 class="mb-3">EMURE CAMPUS</h4>
                        </strong>
                        <p><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Obada market, via energy filling station,
                            Emure-ile, Owo. <br>
                            <i class="fa fa-phone-square" aria-hidden="true"></i> 08136089968, 080601805
                            <br>
                        </p>
                    </div>

                    <div class="card map">
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6874.989579008864!2d5.510251386836815!3d7.239128358372377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1047bb297fba87ed%3A0x674abc13dd01f2af!2sOgo%20Oluwa%20Group%20of%20schools.!5e1!3m2!1sen!2sng!4v1686308158800!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="card col-md-6 py-3">
                    <div class="address mb-5">
                        <strong>
                            <h4 class="mb-3">USO CAMPUS</h4>
                        </strong>
                        <p><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Behind water reservoir, oke-uso, uso, Owo.
                            <br>
                            <i class="fa fa-phone-square" aria-hidden="true"></i> 08136089968, 080601805
                        </p>

                    </div>
                    <div class="card map">
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6874.989579008864!2d5.510251386836815!3d7.239128358372377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1047bb297fba87ed%3A0x674abc13dd01f2af!2sOgo%20Oluwa%20Group%20of%20schools.!5e1!3m2!1sen!2sng!4v1686308158800!5m2!1sen!2sng" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- address -->

    <!-- map -->

    <!-- map -->

    <!-- body -->





    <!-- footer -->
    <?php include("includes/footer.php");?>
    <!-- footer -->



</body>

</html>