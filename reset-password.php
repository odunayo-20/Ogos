<!DOCTYPE html>
<html lang="en">
<?php session_start();?>
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Staff Reset Password</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="admin/assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="admin/assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="admin/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='admin/assets/img/logo/logo.png' />

  <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>


</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Forgot Password</h4>
              </div>
              <div class="card-body">
                <p class="text-muted">We will send a link to reset your password</p>
                <form method="POST" action="reset-password-process.php">
                <?php
                    if (isset($_SESSION['success'])) {
                        echo ('<p style="color: green">' . $_SESSION['success'] . "</p>");
                        unset($_SESSION['success']);
                    }
                    if (isset($_SESSION['error'])) {
                        echo ('<p style="color: danger">' . $_SESSION['error'] . "</p>");
                        unset($_SESSION['error']);
                    }
                    ?>

                  <div class="form-group">
                    <label for="email">New Password</label>
                    <input id="email" type="password" class="form-control" name="pass" tabindex="1" required autofocus>
                  </div>
                  <div class="form-group">
                    <label for="email">Confirm Password</label>
                    <input id="email" type="password" class="form-control" name="Cpass" tabindex="1" required autofocus>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Forgot Password
                    </button>
                  </div>
                </form>
                <div class="mt-5 text-muted text-center">
              Return to the? <a href="staff-login.php">Login Page</a>
            </div>
              </div>

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


<!-- auth-forgot-password.html  21 Nov 2019 04:05:02 GMT -->
</html>