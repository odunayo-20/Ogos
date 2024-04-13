<?php
include("includes/header.php");
// error_reporting(0);
?>


<div class="loader"></div>
<!-- navigation bar start -->
<?php include("includes/navbar.php"); ?>
<!-- navigation bar stop -->

<!-- sidebar start -->
<?php include("includes/sidebar.php"); ?>
<!-- sidebar stop -->

<!-- Main Content start -->
<div class="main-content">
    <!-- section start -->
    <section class="section">
        <div class="section-body">
            <!-- add content start here -->


            <?php
            $idd = $_REQUEST['id'];

            $query = "SELECT * FROM student WHERE student_id = '{$idd}'";
            $result = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['student_id'];
                $username = $row['username'];
                $serial = $row['serial'];
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
                $class = $row['class'];
                // $year_employed = $row['year_employed'];
            }

            $query = "SELECT * FROM class";
            $result = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                $project[] = $row;
            }

            ?>
            <div class="main-container">
                <div class="py-3 card bg-primary">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4 class="fw-bold px-3">STUDENT EDIT FORM</h4>
                            </div>

                        </div>
                    </div>
                </div>

                <form class="" action="admin-student-edit-process.php" method="post" enctype="multipart/form-data">
                    <?php
                    if (isset($_SESSION['success'])) {
                        echo ('<p style="color: green">' . $_SESSION['success'] . "</p>");
                        unset($_SESSION['success']);
                    }
                    if (isset($_SESSION['error'])) {
                        echo ('<p style="color: danger">' . $_SESSION['error'] . "</p>");
                        unset($_SESSION['error']);
                    }
                    ?>

                    <h5>student Biodata</h5>
                    <hr>
                    <section>
                        <!-- row start -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" placeholder="" name="serial" value="<?php echo $serial ?>" required=required />
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" placeholder="" name="username" value="<?php echo $username ?>" required=required />
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" placeholder="" name="id" value="<?php echo $id ?>" required=required />
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>First Name :</label>
                                    <input type="text" class="form-control" placeholder="" name="fname" value="<?php echo $firstname ?>" required=required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Middle Name :</label>
                                    <input type="text" class="form-control" placeholder="" name="mname" value="<?php echo $middlename ?>" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Last Name :</label>
                                    <input type="text" class="form-control" placeholder="" name="lname" value="<?php echo $lastname ?>" required="required" />
                                </div>
                            </div>
                        </div>
                        <!-- row end -->

                        <!-- row start -->
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gender :</label>
                                    <select class="custom-select form-control" name="gender">
                                        <option value="<?php echo $gender ?>"><?php echo $gender ?></option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date of Birth :</label>
                                    <input name="dob" type="date" class="form-control" placeholder="" required="required" value="<?php echo $dob ?>" />
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State of Origin/Region :</label>
                                    <input name="state" type="text" class="form-control" placeholder="" required="required" value="<?php echo $state ?>" />
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>L.G.A Origin/Region :</label>
                                    <input name="lga" type="text" class="form-control" placeholder="" required="required" value="<?php echo $lga ?>" />
                                </div>
                            </div>

                        </div>
                        <!-- row start -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Home Town :</label>
                                    <input name="town" type="text" class="form-control" placeholder="" required="required" value="<?php echo $town ?>" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Address :</label>
                                    <input type="email" placeholder="@gmail.com" name="email" class="form-control" value="<?php echo $email ?>" />
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Phone Number :</label>
                                    <input type="text" name="phone" class="form-control" value="<?php echo $phone ?>" />
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="form-group">
                                    <label>Address :</label>
                                    <input type="text" name="address" class="form-control" value="<?php echo $location ?>" />
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>class :</label>
                                    <select name="class" id="" class="custom-select form-control">
                                        <option value="<?php echo $class; ?>"><?php echo $class ?></option>

                                        <?php
                                        foreach ($project as $value) { ?>
                                            <option value="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></option>

                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <h5>Update Passport</h5>
                                <hr>

                                <img src="../<?php echo $img ?>" alt="" class="img-fluid rounded-circle my-2" style="height:50px; width:50px;" id="showImage">
                                <br>
                                <input type="hidden" name="old_img" value="<?php echo $img ?>" />
                                <input type="file" name="img" id="image-upload" />
                            </div>
                        </div>
                        <button type="submit" class="btn-primary btn-lg mt-3 mb-3" value="Update">Update</button>
                </form>



                <!-- </div> -->
                <!-- add content stop here-->
            </div>

    </section>
    <!-- section stop -->

</div>
<!-- Main content stop -->

<!-- footer start -->
<?php include("includes/footer.php"); ?>
<!-- footer stop -->