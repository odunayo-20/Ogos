<?php error_reporting(0);

session_start();
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>

    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script> -->

    <!-- favicon -->
    <link rel="shortcut icon" href="ogo oluwa favicon/android-chrome-512x512.png" type="image/x-icon">
    <!-- favicon -->

    <!-- icon -->
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <!-- icon -->

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="bootstrap-icons-1.10.5/font/bootstrap-icons.min.css">
    <!-- bootstrap icon -->


    <link rel="stylesheet" href="css/admission.css">

    <!-- js -->
    <script src="assets/bundles/datatables/export-tables/buttons.print.min.js"></script>
    <!-- js -->

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
                                <a href="ads_guildlines.php" class="btn btn-light mb-2"> Admission Guildlines </a>
                                <a href="#" class="btn btn-light mb-2 disabled">Fill Admission Form </a>

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

                        <div class="card-header text-center" style=" background-color:  rgb(59, 15, 129);
                      color: white; height: 50px ;">
                            <h3>STUDENT'S INFORMATION</h3>
                        </div>

                        <!-- <div class="container-fluid"> -->

                        <div class="container">

                            <!--student form -->


                            <form action="admission-process.php" method="post" class="text-start mt-3 mb-2" enctype="multipart/form-data">
                            <?php 
                if(isset($_SESSION['success'])){
                  echo('<p style="color: green">'.$_SESSION['success']."</p>");
                  unset($_SESSION['success']);
                }
                if(isset($_SESSION['error'])){
                  echo('<p style="color: danger">'.$_SESSION['error']."</p>");
                  unset($_SESSION['error']);
                }
                ?>


                                <div class="row mt-2 mb-5">
                                    <label class="form-label col-md-2">Surname : </label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="Surname" name="surname" value="<?php echo $surname?>">
                                    </div>
                                    <label class="form-label col-md-2">Othernames : </label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="Othernames" name="othernames" value="<?php echo $othernames;?>">
                                    </div>

                                </div>
                                <div class="row mt-2 mb-5">
                                    <label class="form-label col-md-2">Email : </label>
                                    <div class="col-md-4">
                                        <input type="email" class="form-control" placeholder="Email address" name="email" value="<?php echo $email?>">
                                    </div>
                                    <label class="form-label col-md-2">Gender : </label>
                                    <div class="col-md-4">
                                        <select name="gender" class="form-control" id="gender">
                                            <option>--Select gender--</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="row mt-2 mb-5">
                                    <label class="form-label col-md-2">Nationality : </label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="" name="nation" value="<?php echo $nation?>">
                                    </div>
                                    <label class="form-label col-md-2">State Of Origin : </label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="" name="state" value="<?php echo $state?>">
                                    </div>

                                </div>
                                <div class="row mt-2 mb-5">
                                    <label class="form-label col-md-2">Home town : </label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="Town / City" name="town" value="<?php echo $town; ?>">
                                    </div>
                                    <label class="form-label col-md-2">D . O . B : </label>
                                    <div class="col-md-4 ">
                                    <input type="date" class="form-control"  name="dob" placeholder="" value="<?php echo $dob; ?>">
                                    </div>

                                </div>
                                <div class="row mt-2 mb-5">
                                    <label class="form-label col-md-2">School branch : </label>
                                    <div class="col-md-4">
                                        <select name="branch" class="form-control" id="branch">
                                            <option>--Select Location--</option>
                                            <option value="emure">Emure Campus</option>
                                            <option value="uso">Uso Campus</option>
                                        </select>
                                    </div>
                                    <label class="form-label col-md-2">School section : </label>
                                    <div class="col-md-4">
                                        <select name="section" class="form-control" id="section">
                                            <option>--Select Section--</option>
                                            <option value="nursery">Nursery</option>
                                            <option value="primary">Primary</option>
                                            <option value="secondary">Secondary</option>
                                        </select>
                                    </div>
                                    

                                </div>
                                <div class="row mt-2 mb-5">
                                    <label class="form-label col-md-2">Phone number : </label>
                                    <div class="col-md-4">
                                        <input type="phone" class="form-control" placeholder="" name="phone" value="<?php echo $phone?>">
                                    </div>
                                    <label class="form-label col-md-2">Class : </label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="class of entry" name="class" value="<?php echo $class;?>">
                                    </div>
                                    

                                </div>

                                <div class="row mt-2 mb-5">
                                <label class="form-label col-md-2">Upload Image : </label>
                                    <div class="col-md-6">
                                        <input type="file" class="form-control" name="pic">

                                    </div>
                                </div>





                                <!-- </div> -->
                        </div>

                    </div>

                    <!-- guardian form -->
                    <div class="card mb-3">
                        <div class="card-header text-center" style=" background-color:  rgb(59, 15, 129);
                            color: white; height: 50px ;">
                            <h3>GUARDIAN'S
                                INFORMATION</h3>
                        </div>

                        <div class="container mt-3 mb-2 py-2">
                            <!-- <form class="mt-3 mb-2"> -->
                            Relationship with Guardian
                            <select name="relationship" class="form-control" id="type_of_guardian">
                                <option>--Select Type--</option>
                                <option value="parent">Parent</option>
                                <option value="uncle">Uncle</option>
                                <option value="aunty">Aunty</option>
                                <option value="others">Others</option>
                            </select>
                            Guardians Fullname: <input name="guardians_name" type="text" class="form-control" id="guardians_name" value="<?php echo $guardians_name;?>" />
                            Guardians_Phone:
                            <input name="guardians_phone" type="text" class="form-control" id="guardians_phone" value="<?php echo $guardians_phone;?>"/>
                            Guardians E-mail: <input name="guardians_email" type="text" class="form-control" id="guardians_email" value="<?php echo $guardians_email;?>"/>
                            Guardians Address:<br> <textarea  name="guardians_address" class="form-control"><?php echo $guardians_address;?></textarea><br>

                            <button class="btn btn-md btn-primary mb-3">Apply For Admission</button>
                        </div>


                        </form>
                        <!-- guardian form -->
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