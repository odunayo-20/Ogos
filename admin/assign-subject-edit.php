<?php include("includes/header.php"); ?>
<!-- <?php //error_reporting(0); ?> -->

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
          <div class="card">
            <div class="card-header">
              <h4>UPDATE SUBJECT</h4>
            </div>
            <div class="card-body">
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

            <span class="text-center" style="color: red;"><h5><?php echo$error_msg ?></h5></span>

<?php

include_once('../includes/db.php');

$project = array();
$subject = array();

$query = "SELECT * FROM class WHERE status = '0'";
$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($result)){
    $project[] = $row;
}

$querySubject = "SELECT * FROM subject WHERE status = '0'";
$subjectResult = mysqli_query($connection, $querySubject);

while ($subjectRow = mysqli_fetch_assoc($subjectResult)) {
  # code...
  $subject[] = $subjectRow;
}

$id = $_GET['id'];
$queryAssign = "SELECT * FROM assign_subject WHERE id = $id";
$assignResult = mysqli_query($connection, $queryAssign);
while($row = mysqli_fetch_assoc($assignResult)){
   $classdd =  $row['class'];
   $subjectdd =  $row['subject'];
   $status =  $row['status'];
   $idd =  $row['id'];

   switch ($status) {
    case '0':
        # code...
        $Status = 'Active';
        break;

    case '1':
        # code...
        $Status = 'Inactive';
        break;

    default:
        # code...
        break;
}

}


?>


              <form action="assign-subject-edit-process.php" method="post" enctype="multipart/form-data">

              
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Class</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="hidden" value="<?php echo $idd?>" name="id">
                    <select class="form-control selectric" name="class">
                    <option value="<?php echo $classdd?>"><?php echo $classdd?></option>

                      <?php
                      foreach($project as $values){?>
                        <option value="<?php echo $values['name']?>"><?php echo $values['name']?></option>

                     <?php }
                      ?>
                      
                    </select>
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subject</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric" name="subject">
                    <option value="<?php echo $subjectdd?>"><?php echo $subjectdd?></option>
                      <?php
                      foreach($subject as $subjects){?>
                        <option value="<?php echo $subjects['name']?>"><?php echo $subjects['name']?></option>

                     <?php }
                      ?>
                      
                    </select>
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric" name="status">
                      <option value="<?php echo $status ?>"><?php echo $Status?></option>
                      <option value="0">Active</option>
                      <option value="1">Inactive</option>
                      
                    </select>
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <!-- <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label> -->
                  <div class="col-sm-12 col-md-7">
                    <button class="btn btn-primary">Submit</button>
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
<!-- General JS Scripts -->
<?php include("includes/footer.php");?>