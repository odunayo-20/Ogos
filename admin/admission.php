

<?php include("includes/header.php"); ?>
<?php error_reporting(0); ?>

<div class="loader"></div>
<!-- navigation bar start -->
<?php include("includes/navbar.php"); ?>
<!-- navigation bar stop -->

<!-- sidebar start -->
<?php include("includes/sidebar.php"); ?>
<!-- sidebar stop -->

<!-- Main Content start -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <h2 style="text-decoration: underline;">ADMISSION RECORDS</h2>

      <?php
      $limit = 5;

      if (isset($_GET['pageid'])) {

        $pagenumber = $_GET['pageid'];
        $start = ($pagenumber - 1) * $limit;
        $sql = ("SELECT * FROM admission order by id desc LIMIT $start, $limit");
        $result = mysqli_query($connection, $sql);
      } else {
        $start = 0;
        $sql = ("SELECT * FROM admission order by id desc LIMIT $start, $limit");
        $result = mysqli_query($connection, $sql);
      }

      
      ?>
      <div class="row">
        <div class="col-md-12">
          <!-- query for admission counting start -->
          <?php

          $sql1 = "SELECT * FROM admission";
          $sql1_check = mysqli_query($connection, $sql1);
          $count = mysqli_num_rows($sql1_check);



          ?>
          <!-- query for admission counting stop -->

        </div>
      </div>

      <div class="row">
        <div class="col-12">
        <?php 
                if(isset($_SESSION['success'])){
                  echo('<p style="color: green">'.$_SESSION['success']."</p>");
                  unset($_SESSION['success']);
                }
                ?>

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
              <th>Surname</th>
              <th>Othernames</th>
              <th>Email</th>
              <th>Gender</th>
              <th>DOB</th>
              <th>Pic</th>
              <!-- <th>Date</th> -->
              <th>Action</th>
            </tr>

            <?php
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
              $i++;
              $img = $row['pic'];
            ?>

              <tr>



                <td><?php echo $i; ?></td>
                <td><?php echo $row['surname']; ?></td>
                <td><?php echo $row['othernames']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['dob']; ?></td>
                <td><img src="../<?php echo $img;?>" alt="" class="img-fluid rounded-circle" style="width: 50px; height:50px"></td>

                <!-- <td><?php //echo $row['dateposted']; ?></td> -->

                <td>
                <style>
                  button,form,input{
                    display: inline;
                  }
                </style>

<a href="admission-details.php?id=<?php echo $row["id"]; ?>" class="btn btn-outline-primary" title="View more"><i class="fas fa-eye"></i></a>
<a href="admission-delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-outline-primary" title="delete" id="delete"><i class="fas fa-trash"></i></a>
                  <!-- <form action="admission-delete.php" method="post">
                          <input type="hidden" name="admission_id" value="<?php// echo $row['id'];?>">
                          <input type="hidden" name="admission_img" value="../<?php// echo $img?>">
                          <button type="submit" class="btn btn-outline-primary" name="admission_delete" title="Delete" id="delete">
                          
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </button>
                        </form> -->
                </td>

              </tr>
            <?php
            }
            ?>
          </table>

          <ul class="pagination">
                                    <?php if ($pagenumber > 1) { ?>

                                        <li class="page-item"> <a href="admission-record.php" class="page-link">Previous</a></li>
                                    <?php } ?>

                                    <?php
                                    $sql1 = "SELECT * FROM admission order by id desc ";
                                    $sql1_check = mysqli_query($connection, $sql1);
                                    $count = mysqli_num_rows($sql1_check);
                                    // echo $count;
                                    $total = ceil($count / $limit);
                                    for ($i = 1; $i <= $total; $i++) {
                                        if ($pagenumber == $i) {
                                    ?>
                                            <li class="page-item active"> <a href="admission-record.php?pageid=<?php echo $i ?>" class="page-link"><?php echo $i; ?></a></li>
                                        <?php } else {
                                        ?>
                                            <li class="page-item"> <a href="admission-record.php?pageid=<?php echo $i ?>" class="page-link"><?php echo $i; ?></a></li>

                                            <!-- ?> -->
                                    <?php }
                                    } ?>
                                    <?php if ($pagenumber != $total) { ?>

                                        <li class="page-item"> <a href="admission-record.php?pageid=<?php echo $pagenumber + 1; ?>" class="page-link">Next</a></li>

                                     
                                        
                                    <?php } ?>

                                </ul>
                            
       
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Main content stop -->

<!-- footer start -->
<?php include("includes/footer.php"); ?>
<!-- footer stop -->