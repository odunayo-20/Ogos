<?php  error_reporting(0)  ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form Confirmation</title>

 <!-- head -->
 <?php include('includes/head.php'); ?>

<!-- head -->


</head>

<body>

    <div class="container-fluid ">
        <div class="section mx-auto bg-light " style="width: 70%;  margin-top: 80px;">

            <div class="container">
                <!-- top-bar -->
                <div class="container ">
                    <div class="row mx-auto py-2">
                        <div class="col logo   ">
                            <img class="mx-0" src="logo/logo.png" alt="logo" height="160px">
                        </div>

                        <div class="col title text-center ">
                            <span>
                                <h5 class="title2" style="color: rgb(59, 15, 129);">OGO OLUWA GROUP OF SCHOOLS</h5>
                            </span>
                            <h6 class="subtitle">Education for better future!</h6>

                        </div>

                        <div class="col text-end passport  ">
                            <img name="" id="uploadPreview1" src="images/1684163790435.jpg" width="150" height="160" alt="passport">
                        </div>

                    </div>
                    <strong>
                        <h6 class="text-center"> ADMISSION FORM</h6>
                    </strong>
                </div>


                <hr>

            </div>


            <!-- top-bar -->

            <!-- form -->



            <div class="container mt-3 mb-3">

                <form class="mt-3">




                    <div class="row  mb-4">
                        <div class="col ">
                            <label>Surname : </label>
                            <input type="text" name="surname">
                        </div>


                        <div class="col ">
                            <label>Othernames : </label>
                            <input type="text" name="othernames">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col mb-3">
                            <label>D . O . B : </label>
                            <input type="text" name="dob" placeholder="Day / Month / Year" style="width: 40%;">
                        </div>
                        <div class="col mb-3">
                            <label>Gender : </label>
                            <input type="text" name="gender" style="width: 20%;">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col mb-3">
                            <label>Nationality : </label>
                            <input type="text" name="nationality" style="width: 40%;">
                        </div>
                        <div class="col mb-3">
                            <label>State : </label>
                            <input type="text" name="state" style="width: 40%;">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col mb-3">
                            <label>Town / City : </label>
                            <input type="text" name="city" style="width: 40%;">
                        </div>
                        <div class="col mb-3">
                            <label>Street : </label>
                            <input type="text" name="street" placeholder="current address" style="width: 70%;">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col mb-3">
                            <label>School branch : </label>
                            <input type="text" name="branch" style="width: 40%;">
                        </div>
                        <div class="col mb-3">
                            <label>Section : </label>
                            <input type="text" name="section" style="width: 70%;">
                        </div>
                        <div class="col mb-3">
                            <label>Class : </label>
                            <input type="text" name="class" style="width: auto;">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col mb-3">
                            <label>Email : </label>
                            <input type="text" name="email" style="width: 50%;">
                        </div>
                        <div class="col mb-3">
                            <label>Phone number : </label>
                            <input type="text" name="phone" style="width: 40%;">
                        </div>

                    </div>


                </form>

            </div>

            <!-- guardians form -->


            <div class="container mt-3 mb-4">
                <h3 class="mb-4" style="text-decoration: underline; ">GUARDIANS DETAILS</h3>
                <form>
                    <div class="row  mb-4">
                        <div class="col ">
                            <label>Surname : </label>
                            <input type="text" name="surname">
                        </div>


                        <div class="col ">
                            <label>Othernames : </label>
                            <input type="text" name="othernames">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col mb-3">
                            <label>Relationship : </label>
                            <input type="text" name="relationship" style="width: 30%;">
                        </div>
                        <div class="col mb-3">
                            <label>Gender : </label>
                            <input type="text" name="gender" style="width: 20%;">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col mb-3">
                            <label>Address : </label>
                            <input type="text" name="address" style="width: 70%;">
                        </div>
                        <div class="col mb-3">
                            <label>Email : </label>
                            <input type="text" name="email" style="width: 70%;">
                        </div>
                        <div class="col mb-3">
                            <label>Phone number : </label>
                            <input type="text" name="phone" style="width: 50%;">
                        </div>
                    </div>



                </form>



            </div>



            <!-- guardians form -->

            <!-- form -->

            <!-- declearation -->
            <div class="container mb-5">
                <strong>
                    <h6 class="text-center" style="text-decoration: underline;">DECLEARATION</h6>
                </strong>
                
                <p> I hereby, declearing that i <strong><?php echo $student_name ?></strong> will obey the rules and regulations of the institution as a student and be fully responsible for violating the rules. </p>
            </div>
            <!-- declearation -->
        </div>

    </div>




</body>

</html>