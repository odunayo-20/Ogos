<?php include("includes/header.php"); ?>
<?php error_reporting(0); ?>

<div class="loader"></div>
<!-- navigation bar start -->
<?php include("includes/staff-navbar.php"); ?>
<!-- navigation bar stop -->

<!-- sidebar start -->
<?php include("includes/staff-sidebar.php"); ?>
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
                ?>

          <div class="card">
            <div class="card-header">
              <h4>News Record Table</h4>
              <div class="card-header-form">
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                      <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>



            <?php
            $limit = 10;

            if (isset($_GET['pageid'])) {

              $pagenumber = $_GET['pageid'];
              $start = ($pagenumber - 1) * $limit;
              $sql = ("SELECT * FROM news order by id desc LIMIT $start, $limit");
              $result = mysqli_query($connection, $sql);
            } else {
              $start = 0;
              $sql = ("SELECT * FROM news order by id desc LIMIT $start, $limit");
              $result = mysqli_query($connection, $sql);
            }


            ?>
            <!-- query to check for news count start -->
            <?php

            $query = "SELECT * FROM news";
            $Event = mysqli_query($connection, $query);

            $eventCount = mysqli_num_rows($Event);



            // drafted start
            $query = "SELECT * FROM news WHERE status = 'drafted'";
            $draft = mysqli_query($connection, $query);
            $draftCount = mysqli_num_rows($draft);
            // drafted stop



            // published query start
            $query = "SELECT * FROM news WHERE status = 'published'";
            $publish = mysqli_query($connection, $query);
            $publishCount = mysqli_num_rows($publish);
            // published query stop


            ?>
            <!-- query to check for news count stop -->
            <div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">All <span class="badge badge-white"><?php echo $publishCount ?></span></a>
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

                    <!-- title,subtitle,summary,pic,content,date -->
                    <th>S/N</th>

                    <th>Title</th>
                    <!-- <th>Subtitle</th> -->
                    <!-- <th>Summary</th> -->
                    <th>Pic</th>
                    <!-- <th>Content</th> -->
                    <th>Date & Time posted</th>
                    <th>Action</th>

                  </tr>



                  <?php
                  $i = 0;
                  while ($row = mysqli_fetch_assoc($result)) {
                    $i++;
                    $content = $row['content'];
                    $img = $row['pic'];
                    $status = $row['status'];
                    $subtitle = $row['subtitle'];
                    $title = $row['title'];
                    
                    $message = substr($content, 0, 20);
                    $subtitle = substr($subtitle, 0, 20);
                    // $title = substr($title, 0, 20);
                    (strlen($title)>50 ) ? $title = substr($title, 0, 50).'...': $title = $title;

                  ?>

                    <tr>



                      <td><?php echo $i; ?></td>
                      <td><?php echo $title; ?>
                      </td>
                      <!-- <td><?php //echo $subtitle; ?></td> -->
                      <!-- <td><?php //echo $row['summary']; ?></td> -->
                      <td> <img class="img-fluid rounded-circle" style="height:50px; width:50px; object-fit:cover" src="../<?php echo $img ?>" alt=""></td>
                      <!-- <td><?php //echo ($message); ?></td> -->
                      <td><?php echo $row['date'] . '   ' . $row['time']; ?></td>

                      <!-- <td><?php// echo $row['tag']; ?></td> -->
                      <?php
                      $id_event = $row['id']; ?>
                      <td><a href='staff-news-details.php?id=<?php echo $id_event; ?>'><i class="fa fa-eye" aria-hidden="true"></i></a></td>


                    </tr>
                  <?php
                  }
                  ?>
                </table>

                <ul class="pagination">
                  <?php if ($pagenumber > 1) { ?>

                    <li class="page-item"> <a href="staff-news-record.php?pageid=<?php echo $pagenumber - 1 ?>" class="page-link">Previous</a></li>
                  <?php } ?>

                  <?php
                  $sql1 = "SELECT * FROM news order by id desc ";
                  $sql1_check = mysqli_query($connection, $sql1);
                  $count = mysqli_num_rows($sql1_check);
                  // echo $count;
                  $total = ceil($count / $limit);
                  for ($i = 1; $i <= $total; $i++) {
                    if ($pagenumber == $i) {
                  ?>
                      <li class="page-item active"> <a href="staff-news-record.php?pageid=<?php echo $i ?>" class="page-link"><?php echo $i; ?></a></li>
                    <?php } else {
                    ?>
                      <li class="page-item"> <a href="staff-news-record.php?pageid=<?php echo $i ?>" class="page-link"><?php echo $i; ?></a></li>

                      <!-- ?> -->
                  <?php }
                  } ?>
                  <?php if ($pagenumber != $total) { ?>

                    <li class="page-item"> <a href="staff-news-record.php?pageid=<?php echo $pagenumber + 1; ?>" class="page-link">Next</a></li>
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