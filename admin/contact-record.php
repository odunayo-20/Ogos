


<?php include("includes/header.php"); ?>

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

      <h2 style="text-decoration: underline;">FEEDBACKS</h2>

                        <?php
                        $limit = 10;

                        if (isset($_GET['pageid'])) {

                            $pagenumber = $_GET['pageid'];
                            $start = ($pagenumber - 1) * $limit;
                            $sql = ("SELECT * FROM contact order by id desc LIMIT $start, $limit");
                            $result = mysqli_query($connection, $sql);
                        } else {
                            $start = 0;
                            $sql = ("SELECT * FROM contact order by id desc LIMIT $start, $limit");
                            $result = mysqli_query($connection, $sql);
                        }

                        // $row['id'];
                        ?>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- query for pin counting start -->
                                <?php

                                $sql1 = "SELECT * FROM contact";
                                $sql1_check = mysqli_query($connection, $sql1);
                                $count = mysqli_num_rows($sql1_check);

                                

                                ?>
                                <!-- query for pin counting stop -->

                            </div>
                        </div>

                        <div class="row">
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

                            <div class="col-12">
                                
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">All <span class="badge badge-white"><?php echo $count ?></span></a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="mainTable" class="table table-striped">
                                    <tr>
                                        
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>

                                    <?php
                                    $i = 0;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $i++;
                                    ?>

                                        <tr>

                                           

                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['subject']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td>
                                               
                                                <a href="contact-details.php?id=<?php echo $row["id"]; ?>" class="btn btn-outline-primary"><i class="fas fa-eye"></i></a>

                                                <a href="contact-delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-outline-danger" id="delete"><i class="fas fa-trash" ></i></a>
                                            </td>

                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>

                                <ul class="pagination">
                                    <?php if ($pagenumber > 1) { ?>

                                        <li class="page-item"> <a href="contact-record.php?pageid=<?php echo $pagenumber - 1 ?>" class="page-link">Previous</a></li>
                                    <?php } ?>

                                    <?php
                                    $sql1 = "SELECT * FROM contact order by id desc ";
                                    $sql1_check = mysqli_query($connection, $sql1);
                                    $count = mysqli_num_rows($sql1_check);
                                    // echo $count;
                                    $total = ceil($count / $limit);
                                    for ($i = 1; $i <= $total; $i++) {
                                        if ($pagenumber == $i) {
                                    ?>
                                            <li class="page-item active"> <a href="contact-record.php?pageid=<?php echo $i ?>" class="page-link"><?php echo $i; ?></a></li>
                                        <?php } else {
                                        ?>
                                            <li class="page-item"> <a href="contact-record.php?pageid=<?php echo $i ?>" class="page-link"><?php echo $i; ?></a></li>

                                            <!-- ?> -->
                                    <?php }
                                    } ?>
                                    <?php if ($pagenumber != $total) { ?>

                                        <li class="page-item"> <a href="contact-record.php?pageid=<?php echo $pagenumber + 1; ?>" class="page-link">Next</a></li>

                                        
                                    <?php } ?>

                                </ul>
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