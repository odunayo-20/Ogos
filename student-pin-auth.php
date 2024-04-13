<?php error_reporting(0);
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Student</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    
  <link rel="stylesheet" href="admin/assets/css/app.min.css">
  <link rel="stylesheet" href="admin/assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="admin/assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="admin/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='logo/logo.png' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-secondary">
              <div class="card-header text-center">
                <h4 style="text-align:center;" class="text-uppercase">Student pin Verification</h4>
              </div>
              <div class="card-body">
                
                <form method="POST" action="student-pin-process.php">
<!-- <p class="text-danger"><?php //echo $message; ?></p> -->
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

                  <div class="form-group">
                    <label for="serial">Serial Number</label>
                    <input id="serial" type="text" class="form-control" name="serial">
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                      <label for="pin" class="control-label">Pin</label>
                      <!-- <div class="float-right">
                        <a href="forgot-password.php" class="text-small">
                          Forgot Pin?
                        </a>
                      </div> -->
                      <input id="password" type="number" class="form-control" name="pin">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
             
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Return to the? <a href="index.php">Main Website</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="admin/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="admin/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="admin/assets/js/custom.js"></script>
</body>
</html>