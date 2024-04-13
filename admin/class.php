<?php include("includes/header.php"); ?>
<?php error_reporting(0);
session_start();
?>

<!-- <div class="loader"></div> -->
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
                    if (isset($_SESSION['success'])) {
                        echo ('<p style="color: green">' . $_SESSION['success'] . "</p>");
                        unset($_SESSION['success']);
                    }
                    if (isset($_SESSION['error'])) {
                        echo ('<p style="color: red">' . $_SESSION['error'] . "</p>");
                        unset($_SESSION['error']);
                    }
                    ?>

                </div>
                <div class="col-12 my-2">
                    <a href="class-add.php" class="btn btn-primary" style="float: right;">Add Class</a>
                </div>
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">

                            <h4>Class Record Table</h4>

                            <div class="card-header-form">
                                <form method="post" action="">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- <div class="card-body p-0"> -->


                        <?php
                        $limit = 5;

                        if (isset($_GET['pageid'])) {

                            $pagenumber = $_GET['pageid'];
                            $start = ($pagenumber - 1) * $limit;
                            $sql = ("SELECT * FROM class order by id desc LIMIT $start, $limit");
                            $result = mysqli_query($connection, $sql);
                        } else {
                            $start = 0;
                            $sql = ("SELECT * FROM class order by id desc LIMIT $start, $limit");
                            $result = mysqli_query($connection, $sql);
                        }

                        // $row['id'];
                        ?>
                        <!-- query to check for staff count start -->
                        <?php

                        $query = "SELECT * FROM class";
                        $resultCount = mysqli_query($connection, $query);

                        $classCount = mysqli_num_rows($resultCount);

                                    // search filter
            if (isset($_POST['search'])) {
                $search = $_POST['search'];
            
                $sql = "SELECT * FROM class WHERE CONCAT(id, name, created_at) LIKE '%". $search . "%'";
                $result = mysqli_query($connection, $sql);
            }  

                        ?>
                        <!-- query to check for staff count stop -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">All <span class="badge badge-white"><?php echo $classCount ?></span></a>
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
                                        <th>Status</th>
                                        <th>Date Created</th>
                                        <th>Action</th>
                                    </tr>

                                    <?php
                                    $i = 0;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $i++;
                                    ?>

                                        <tr>


                                            <style>
                                                button,
                                                form,
                                                input {
                                                    display: inline;
                                                }
                                            </style>
                                            <?php
                                            $name =  $row['name'];
                                            $status = $row['status'];
                                            $created_at = $row['created_at'];

                                            switch ($status) {
                                                case '0':
                                                    # code...
                                                    $status = 'Active';
                                                    break;

                                                case '1':
                                                    # code...
                                                    $status = 'Inactive';
                                                    break;

                                                default:
                                                    # code...
                                                    break;
                                            }
                                            ?>

                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $name; ?></a>
                                            </td>

                                            <td><a href="#" class="btn btn-outline-primary"><?php echo strtoupper($status); ?></a></td>
<td><?php echo $created_at?></td>
                                            <td>
                                                <a href="class-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-primary" title="Edit"><i class="fas fa-pen"></i></a>

                                                <a href="class-delete.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-danger" title="delete" id="delete"><i class="fas fa-trash"></i></a>

                                            </td>



                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>

                                <ul class="pagination">
                                    <?php if ($pagenumber > 1) { ?>

                                        <li class="page-item"> <a href="class.php?pageid=<?php echo $pagenumber - 1 ?>" class="page-link">Previous</a></li>
                                    <?php } ?>

                                    <?php
                                    $sql1 = "SELECT * FROM class order by id desc ";
                                    $sql1_check = mysqli_query($connection, $sql1);
                                    $count = mysqli_num_rows($sql1_check);
                                    // echo $count;
                                    $total = ceil($count / $limit);
                                    for ($i = 1; $i <= $total; $i++) {
                                        if ($pagenumber == $i) {
                                    ?>
                                            <li class="page-item active"> <a href="class.php?pageid=<?php echo $i ?>" class="page-link"><?php echo $i; ?></a></li>
                                        <?php } else {
                                        ?>
                                            <li class="page-item"> <a href="class.php?pageid=<?php echo $i ?>" class="page-link"><?php echo $i; ?></a></li>

                                            <!-- ?> -->
                                    <?php }
                                    } ?>
                                    <?php if ($pagenumber != $total) { ?>

                                        <li class="page-item"> <a href="class.php?pageid=<?php echo $pagenumber + 1; ?>" class="page-link">Next</a></li>
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