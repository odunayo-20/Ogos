<?php

// if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
// if (!isset($_SESSION['id'])) {
//   header("Location: ../staff-login.php");
//   exit();
// } 

if(!isset($_SESSION['student_id'])){
  header('location: ../student-login.php');
  exit();
}

?>

<div id="app">
  <div class="main-wrapper main-wrapper-1">
    <div class="navbar-bg"></div>

    <nav class="navbar navbar-expand-lg main-navbar sticky">
      <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
          <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
          <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
              <i data-feather="maximize"></i>
            </a></li>
          <li>
            <form class="form-inline mr-auto">
              <div class="search-element">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                <button class="btn" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </form>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav navbar-right">

<?php

        if(isset($_SESSION['student_id'])){
        $id = $_SESSION['student_id'];
        $query = "SELECT * FROM student WHERE student_id = '$id' ";
        $result = mysqli_query($connection, $query);

          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['student_id'];
            $img = $row['img'];
            $username = $row['username'];
            $email = $row['email'];
            $phone = $row['phone'];
            $location = $row['location'];
      
          }
            }

          
          // else{
          //   header("Location: ../staff-login.php");
          //   exit();
          // }
            ?>
    



    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="../<?php echo  $img; ?>" class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
          <div class="dropdown-menu dropdown-menu-right pullDown">
            <div class="dropdown-title"><?php echo $username; ?></div>
            <a href="#myModal" data-bs-toggle="modal" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
            </a>
            <?php
            // session_destroy();

            ?>
            <!-- <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
              Activities</a>
            <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
              Settings </a> -->
            <div class="dropdown-divider"></div>
            <a href="../student-logout.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
    </nav>



    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-title fw-bolder">Student</div>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form action="student-update.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <label for="">Username</label>
                  <input type="text" value="<?php echo strtoupper($username); ?>" class="form-control" disabled>
                  <input type="hidden" value="<?php echo($id); ?>" class="form-control" name="id">
                </div>
                <div class="col-md-10 mx-auto">
                  <label for="">Email</label>
                  <input type="text" value="<?php echo($email); ?>" class="form-control" name="email">
                </div>
                <div class="col-md-10 mx-auto">
                  <label for="">Phone</label>
                  <input type="text" value="<?php echo($phone); ?>" class="form-control" name="phone">
                </div>
                <div class="col-md-10 mx-auto">
                  <label for="">Location</label>
                  <input type="text" value="<?php echo($location); ?>" class="form-control" name="location">
                </div>
                <div class="col-md-10 mx-auto my-2">
                  <p><img src="../<?php echo $img;?>" alt="" class="img-fluid rounded-circle" style="width: 50px; height:50px" id="showImage"></p>
                  <input type="hidden" class="form-contro" style="border: none;" name="old_img" value="<?php echo $img;?>">
                  <input type="file" class="form-contro" style="border: none;" name="img">
                </div>

                <div class="col-md-10 mx-auto my-2">
                <button type="submit" class="btn btn-primary">Update Profile</button>
              </div>

          </form>
              </div>
          </div>

        </div>

      </div>
    </div>

    <script type="text/javascript">
                  $(document).ready(function(){
                    $('#image-upload').change(function(e){
                      var reader = new FileReader();
                      reader.onload = function(e){
                        $('#showImage').attr('src', e.target.result);
                      }
                      reader.readAsDataURL(e.target.files['0']);
                    });
                  });
                </script>

