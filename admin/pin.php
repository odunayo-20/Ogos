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

            <div class="row">
                <div class="col-12">
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
                <?php
                
                
// if (isset($_GET['search'])) {
//     $search = $_GET['search'];

//     $sql = "SELECT * FROM pin_table WHERE status LIKE '%used%'";
//     $result = mysqli_query($connection, $sql);

//     if (mysqli_num_rows($result) > 0) {
//         while ($row = mysqli_fetch_assoc($result)) {
//             echo "ID: " . $row['pin_user'] . "Data: " . $row['status'] . '<br>';
//         }
//     } else {
//         echo "No results found.";
//     }
// }
                
                ?>

                    <div class="card">
                        <div class="card-header">
                            <h4>Pin Generated Table</h4>
                            <div class="card-header-form">
                                <form method="post" action="">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary" type="search" value="search"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- <div class="card-body p-0"> -->
                        <form class="" action="pin-form-process.php" method="post" enctype="multipart/form-data">
                            <hr>
                            <p class="text-danger"><?php echo $message; ?></p>
                            <section>
                                <!-- row start -->
                                <div class="row mx-auto">

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Numbers Of Pins Needed :</label>
                                            <input type="text" class="form-control" placeholder="" name="pin_name" maxLength="3" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mx-2 col-md-2">
                                    <div class="form-group">

                                        <input type="submit" class="btn-primary btn-lg p-2 " value="Generate">
                                    </div>
                                </div>
                                <!-- row end -->



                        </form>

                        <?php
                        $limit = 5;

                        if (isset($_GET['pageid'])) {

                            $pagenumber = $_GET['pageid'];
                            $start = ($pagenumber - 1) * $limit;
                            $sql = ("SELECT * FROM pin_table order by id desc LIMIT $start, $limit");
                            $result = mysqli_query($connection, $sql);
                        } else {
                            $start = 0;
                            $sql = ("SELECT * FROM pin_table order by id desc LIMIT $start, $limit");
                            $result = mysqli_query($connection, $sql);
                        }

                        // $row['id'];
                        ?>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- query for pin counting start -->
                                <?php

                                $sql1 = "SELECT * FROM pin_table";
                                $sql1_check = mysqli_query($connection, $sql1);
                                $count = mysqli_num_rows($sql1_check);

                                $sql2 = "SELECT * FROM pin_table WHERE status = 'USED'";
                                $sql2_check = mysqli_query($connection, $sql2);
                                $used = mysqli_num_rows($sql2_check);

                                $sql3 = "SELECT * FROM pin_table WHERE status = 'NULL'";
                                $sql3_check = mysqli_query($connection, $sql3);
                                $null = mysqli_num_rows($sql3_check);

                                if (isset($_POST['search'])) {
                                    $search = $_POST['search'];
                                
                                    $sql = "SELECT * FROM pin_table WHERE CONCAT(status, id, pin, pin_user, serial, datep) LIKE '%". $search . "%'";
                                    $result = mysqli_query($connection, $sql);
                                
                                }
                                

                                ?>
                                <!-- query for pin counting stop -->

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">All <span class="badge badge-white"><?php echo $count ?></span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">USED <span class="badge badge-primary"><?php echo $used ?></span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Not Used <span class="badge badge-primary"><?php echo $null ?></span></a>
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
                                        <th class="text-center">
                                            <div class="custom-checkbox custom-checkbox-table custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>S/N</th>
                                        <th>Pin User</th>
                                        <th>Pin</th>
                                        <th>Serial</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>

                                    <?php
                                    $i = 0;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $i++;
                                    ?>

                                        <tr>

                                            <td>
                                                <div class="text-center">
                                                    <input type="checkbox" class="py-2" />
                                                </div>

                                            </td>

                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row['pin_user']; ?></td>
                                            <td><?php echo $row['pin']; ?></td>
                                            <td><?php echo $row['serial']; ?></td>
                                            <td><?php echo $row['status']; ?></td>
                                            <td><?php echo $row['datep']; ?></td>
                                            <td>
                                                <!-- <a href="#" class="btn btn-outline-primary"><i class="fas fa-eye"></i></a> -->
                                                <a href="pin-delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-outline-primary" id="delete"><i class="fas fa-trash" ></i></a>
                                            </td>

                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>

                                <ul class="pagination">
                                    <?php if ($pagenumber > 1) { ?>

                                        <li class="page-item"> <a href="pin.php?pageid=<?php echo $pagenumber - 1 ?>" class="page-link">Previous</a></li>
                                    <?php } ?>

                                    <?php
                                    $sql1 = "SELECT * FROM pin_table order by id desc ";
                                    $sql1_check = mysqli_query($connection, $sql1);
                                    $count = mysqli_num_rows($sql1_check);
                                    // echo $count;
                                    $total = ceil($count / $limit);
                                    for ($i = 1; $i <= $total; $i++) {
                                        if ($pagenumber == $i) {
                                    ?>
                                            <li class="page-item active"> <a href="pin.php?pageid=<?php echo $i ?>" class="page-link"><?php echo $i; ?></a></li>
                                        <?php } else {
                                        ?>
                                            <li class="page-item"> <a href="pin.php?pageid=<?php echo $i ?>" class="page-link"><?php echo $i; ?></a></li>

                                            <!-- ?> -->
                                    <?php }
                                    } ?>
                                    <?php if ($pagenumber != $total) { ?>

                                        <li class="page-item"> <a href="pin.php?pageid=<?php echo $pagenumber + 1; ?>" class="page-link">Next</a></li>
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