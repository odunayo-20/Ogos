<?php include("includes/header.php"); ?>

<div class="loader"></div>
<!-- navigation bar start -->
<?php include("includes/student-navbar.php"); ?>
<!-- navigation bar stop -->

<!-- sidebar start -->
<?php include("includes/student-sidebar.php"); ?>
<!-- sidebar stop -->

<!-- Main Content start -->
<div class="main-content">
    <!-- section start -->
    <section class="section">
        <div class="section-body">
            <!-- add content start here -->
            <div class="row">
                <!-- <div class="col-md-12 col-sm-12 col-lg-7"> -->

                <?php 
$query = "SELECT * FROM news WHERE status = 'published'";
$result = mysqli_query($connection, $query);
$news = mysqli_num_rows($result);
?>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon l-bg-cyan">
                            <i class="fas fa-book-open" style="font-size: 40px;"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="padding-20">
                                <div class="text-right">
                                    <h3 class="font-light mb-0">
                                        <i class="ti-arrow-up text-success"></i> <?php echo $news; ?>
                                    </h3>
                                    <span class="text-muted"><a href="student-news.php">News Record</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
$query = "SELECT * FROM event WHERE event_status = 'published'";
$result = mysqli_query($connection, $query);
$event = mysqli_num_rows($result);
?>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon l-bg-cyan">
                            <i class="fas fa-book" style="font-size: 40px;"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="padding-20">
                                <div class="text-right">
                                    <h3 class="font-light mb-0">
                                        <i class="ti-arrow-up text-success"></i> <?php echo $event; ?>
                                    </h3>
                                    <span class="text-muted"><a href="student-event.php">Event Record</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                            $id = $_SESSION['student_id'];

                            $query = "SELECT * FROM student WHERE student_id = '$id'";
                            $test = mysqli_query($connection, $query);
                            while($row = mysqli_fetch_assoc($test)){
                              $class = $row['class'];
                            }
                            
$query = "SELECT * FROM assignment WHERE status = 'published' AND class = '$class' ";
$result = mysqli_query($connection, $query);
$assign = mysqli_num_rows($result);
?>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon l-bg-cyan">
                            <i class="fas fa-book" style="font-size: 40px;"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="padding-20">
                                <div class="text-right">
                                    <h3 class="font-light mb-0">
                                        <i class="ti-arrow-up text-success"></i> <?php echo $assign; ?>
                                    </h3>
                                    <span class="text-muted"><a href="assign.php">Assignment
                                            Record</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- add content stop here-->
        </div>

    </section>
    <!-- section stop -->

</div>
<!-- Main content stop -->

<!-- footer start -->
<?php include("includes/footer.php"); ?>
<!-- footer stop -->