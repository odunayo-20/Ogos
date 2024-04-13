<?php  error_reporting(0);
session_start();
?>

<script>
    if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }
</script>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Form Confirmation</title>

    

    <!-- favicon -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    
    <link rel='shortcut icon' type='image/x-icon' href='admin/assets/img/logo/logo.png' />
    <!-- favicon -->

    <!-- icon -->
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <!-- icon -->

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="bootstrap-icons-1.10.5/font/bootstrap-icons.min.css">
    <!-- bootstrap icon -->

  
    <link rel="stylesheet" href="staff-confirm.css">  
    


    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <!-- bootstrap -->


</head>

<body>

    <div class="container-fluid ">
        <div class="section mx-auto bg-light " style="width: 70%;  margin-top: 80px;">
        <?php

include("includes/db.php");

$query = "SELECT * FROM staff";
$result = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $username = $row['username'];
    $firstname = $row['firstname'];
    $middlename = $row['middlename'];
    $lastname = $row['lastname'];
    $gender = $row['gender'];
    $dob = $row['dob'];
    $state = $row['state'];
    $town = $row['town'];
    $lga = $row['lg'];
    $email = $row['email'];
    $phone = $row['phone'];
    $location = $row['location'];
    $img = $row['img'];
    $category = $row['category'];
    $year_employed = $row['year_employed'];
    $pass = $row['password'];
    $cpass = $row['password'];
}

switch ($category) {
    case 'NTS':
        # code...
        $Category = 'Non Teaching staff';
        break;

    case 'TS':
        # code...
        $Category = 'Teaching staff';
        break;

    default:
        # code...
        break;
}

switch ($year_employed) {
    case '7':
        # code...
        $Year_employed = '2023';
        break;

    case '6':
        # code...
        $Year_employed = '2022';
        break;

    case '5':
        # code...
        $Year_employed = '2021';
        break;

    case '4':
        # code...
        $Year_employed = '2020';
        break;

    case '3':
        # code...
        $Year_employed = '2019';
        break;

    case '2':
        # code...
        $Year_employed = '2018';
        break;

    case '1':
        # code...
        $Year_employed = '2017';
        break;

    default:
        # code...
        break;
}

?>


            <div class="container">
                <!-- top-bar -->
                <div class="table-responsive">
                <?php 
                if(isset($_SESSION['success'])){
                  echo('<p style="color: green">'.$_SESSION['success']."</p>");
                  unset($_SESSION['success']);
                }
                ?>

                <table class="table">
                    <tr>
                        <td>
                        <div class="col-md-12 text-center">
                            <img class="img-fluid" src="logo/logo.png" alt="logo" style="height: 150px; width:150px">
                        </div>

                        </td>
                        <td>

                        <div class="col-md-12 text-center ">
                            <span>
                                <h5 class="title2" style="color: rgb(59, 15, 129);">OGO OLUWA GROUP OF SCHOOLS</h5>
                            </span>
                            <h6 class="subtitle">Education for better future!</h6>

                        </div>

                        </td>
                        <td>
                        <div class="col-md-12 text-end  ">
                            <img class="img-fluid" name="" id="uploadPreview1" src="<?php echo$img ?>" alt="passport" style="height: 100px; width:100px">
                        </div>

                        </td>
                    </tr>
                </table>
                </div>

                <div class="container ">
                        <h6 class="text-center"> STAFF CONFIRMATION PAGE</h6>
                    </strong>
                </div>


                <hr>

            </div>


            <!-- top-bar -->


            
            <!-- form -->



            <div class="container-fluid mt-3 mb-3">

                <form class="mt-3">




                    <div class="row  mb-4">
                        <div class="col-md-4 col-sm-4 ">
                            <label class="">Firstname : </label>
                            <input type="text" name="surname" class="form-control" disabled value="<?php echo $firstname?>">
                        </div>


                        <div class="col-md-4 col-sm-4 ">
                            <label>Middlename : </label>
                            <input type="text" class="form-control" disabled name="othernames" value="<?php echo $middlename?>">
                        </div>
                        <div class="col-md-4 col-sm-4 ">
                            <label>Lastname : </label>
                            <input type="text" class="form-control" disabled name="othernames" value="<?php echo $lastname?>">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col mb-3">
                            <label>D . O . B : </label>
                            <input type="text" class="form-control" disabled name="dob" placeholder="Day / Month / Year"  value="<?php echo $dob?>">
                        </div>
                        <div class="col mb-3">
                            <label>Gender : </label>
                            <input type="text" class="form-control" disabled name="gender" value="<?php echo $gender?>">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-6 mb-3">
                            <label>State of Origin/Region : </label>
                            <input type="text" class="form-control" disabled name="state"  value="<?php echo $state?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label>L.G.A Origin/Region : </label>
                            <input type="text" class="form-control" disabled name="nationality" value="<?php echo $lga?>">
                        </div>
                        <div class="col-6 mb-3">
                            <label>Town / City : </label>
                            <input type="text" class="form-control" disabled name="city"  value="<?php echo $town?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Address :</label>
                            <input type="text" class="form-control" disabled name="street" placeholder="current address"  value="<?php echo $location?>">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col mb-3">
                            <label>Staff : </label>
                            <input type="text" class="form-control" disabled name="branch" value="<?php echo $Category?>">
                        </div>
                        <div class="col mb-3">
                            <label>Year Employed : </label>
                            <input type="text" class="form-control" disabled name="section" value="<?php echo $Year_employed?>" >
                        </div>
                        <!-- <div class="col mb-3">
                            <label>Class : </label>
                            <input type="text" class="form-control" disabled name="class">
                        </div> -->
                    </div>
                    <div class="row mb-5">
                        <div class="col mb-3">
                            <label>Email : </label>
                            <input type="text" class="form-control" disabled name="email"  value="<?php echo $email?>">
                        </div>
                        <div class="col mb-3">
                            <label>Phone number : </label>
                            <input type="text" class="form-control" disabled name="phone" value="<?php echo $phone?>">
                        </div>

                    </div>


                </form>

            </div>

            <!-- guardians form -->


            <div class="container mt-3 mb-4">
                <h3 class="mb-4 text-center" style="text-decoration: underline; ">LOGIN DETAILS</h3>
                <form>

                    <div class="row  mb-4">
                        <div class="col-md-5 ">
                            <input type="text" name="surname" class="form-control" value="<?php echo $username?>" disabled>
                        </div>
                        <div class="col-md-2 text-center">
                            <p>OR</p>
                        </div>
                        <div class="col-md-5 ">
                            <input type="text" name="surname" class="form-control" value="<?php echo $email?>" disabled>
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
                <!-- <p> I hereby, declearing that i <strong><?php echo $firstname.''.$lastname; ?></strong> will obey the rules and regulations of the institution as a student and be fully responsible for violating the rules. </p> -->
                <p> I hereby, declearing that i <strong><?php echo $firstname.' '.$middlename.' '.$lastname; ?></strong> will obey the rules and regulations of the institution as a staff and be fully responsible for violating the rules. </p>
                <p class="text-center"><a href="staff-login.php">Login Here</a></p>
            </div>
            <!-- declearation -->
        </div>

    </div>




</body>

</html>