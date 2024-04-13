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
            <?php

            $id = $_GET['id'];
            $query = "SELECT * FROM news WHERE id = '$id'";
            $result = mysqli_query($connection, $query);
            if (mysqli_num_rows($result) == 1) {
                while ($row = mysqli_fetch_assoc($result)) {
                   

                    $title = $row['title'];
                    $subtitle = $row['subtitle'];
                    $summary = $row['summary'];
                    $content = $row['content'];
                    $date = $row['date'];
                    $time = $row['time'];
                    $tag = $row['tag'];
                    $status = $row['status'];
                    $pic = $row['pic'];
                }
            }

            ?>
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


                    <div class="card">
                        <div class="card-header">
                            <h4>Update Your News Post</h4>
                        </div>
                        <div class="card-body">
                           

                        <form action="admin-news-edit-process.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" value="<?php echo $id;?>" name="id">

<div class="form-group row mb-4">
  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
  <div class="col-sm-12 col-md-7">
    <input type="text" class="form-control" name="title" value="<?php echo $title?>"  >
  </div>
</div>
<div class="form-group row mb-4">
  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subtitle</label>
  <div class="col-sm-12 col-md-7">
    <input type="text" class="form-control" name="subtitle" value="<?php echo $subtitle?>"   >
  </div>
</div>
<div class="form-group row mb-4">
  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Summary in sentence</label>
  <div class="col-sm-12 col-md-7">
    <input type="text" class="form-control" name="summary" value="<?php echo $summary?>"   >
  </div>
</div>
<div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-6 col-md-3 col-lg-3">Image</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">Please Re-Choose File</label>
                          <span>
                            <input type="hidden" name="old_pic"  value="<?php echo $pic?>" />
                            <input type="file" name="pic" id="image-upload" />
                            <img src="../<?php echo $pic?>" alt="" style="width: 300px; height:300px" id="showImage" class="image-preview">
                          </span>
                        </div>
                      </div>
                        </div>

<div class="form-group row mb-4">
  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
  <div class="col-sm-12 col-md-7">
    <textarea class="summernote-simple" name="content" ><?php echo $content?></textarea>
  </div>
</div>
<div class="form-group row mb-4">
  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date</label>
  <div class="col-sm-12 col-md-7">
    <input type="date" class="form-control" name="date" value="<?php echo $date?>"  >
  </div>
</div>
<div class="form-group row mb-4">
  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Time</label>
  <div class="col-sm-12 col-md-7">
    <input type="time" class="form-control" name="time"  value="<?php echo $time?>"   >
  </div>
</div>

<div class="form-group row mb-4">
  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
  <div class="col-sm-12 col-md-7">
    <select class="form-control selectric" name="status"  value="<?php echo $status?>"   >
      <option value="published">Publish</option>
      <option value="drafted">Draft</option>
     
    </select>
  </div>
</div>
<div class="form-group row mb-4">
  <!-- <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label> -->
  <div class="col-sm-12 col-md-7">
    <button class="btn btn-primary">UPDATE</button>
  </div>
</div>
</form>

                        
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
<?php include("includes/footer.php");?>
