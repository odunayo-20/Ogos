
<!-- <script>
    if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }
</script> -->

<?php error_reporting(0); ?>
<?php
session_start();
include("includes/db.php");

if (!isset($_SESSION['id'])) {
	header("Location: student-pin-auth.php");
	exit();
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Student</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
	<!-- General CSS Files -->
	<link rel="stylesheet" href="admin/assets/css/app.min.css">
	<link rel="stylesheet" href="admin/assets/bundles/bootstrap-social/bootstrap-social.css">
	<!-- Template CSS -->
	<link rel="stylesheet" href="admin/assets/css/style.css">
	<link rel="stylesheet" href="admin/assets/css/components.css">
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
					<div class="col-lg-12 col-sm-8 offset-sm-6 col-md-6 offset-md-6 col-lg-6 offset-lg-6 col-xl-6 offset-xl-6 mx-auto">
						<div class="card card-primary">
							<div class="card-header" style="text-align: center;">
								<h4 style="text-align:center;" class="text-uppercase">Student Form</h4>
							</div>
							<div class="card-body">

								<form class="" action="student-form-process.php" method="post" enctype="multipart/form-data">
									<h5>Student Biodata</h5>
									<?php 
                if(isset($_SESSION['success'])){
                  echo('<p style="color: green">'.$_SESSION['success']."</p>");
                  unset($_SESSION['success']);
                }
                if(isset($_SESSION['error'])){
                  echo('<p style="color: danger">'.$_SESSION['error']."</p>");
                  unset($_SESSION['error']);
                }
				$rand = rand();
				$_SESSION['rand']=$rand;
                ?>
									<span class="text-danger"><?php echo $message; ?></span>
									<hr>
									<section>
										<!-- row start -->
										<div class="row">
											<?php
											$data = $_SESSION['data'];
											?>

											<div class="col-md-12">
												<!-- <label>Serial :</label> -->
												<input type="hidden" value="<?php echo $data["serial"]; ?>" class="form-control" name="serial" autofocus />
								
							</div>

							<div class=" col-md-4">
												<div class="form-group">
													<label>First Name :</label>
													<input type="text" class="form-control" placeholder="" name="fname"  value="<?php echo $firstname?>"/>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>Middle Name :</label>
													<input type="text" class="form-control" placeholder="" name="mname"  value="<?php echo $middlename?>" />
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>Last Name :</label>
													<input type="text" class="form-control" placeholder="" name="lname"  value="<?php echo $lastname?>" />
												</div>
											</div>
										</div>
										<!-- row end -->

										<!-- row start -->
										<div class="row">

											<div class="col-md-4">
												<input type="hidden" name="randcheck" value="<?php echo $rand?>">
												<div class="form-group">
													<label>Gender :</label>
													<select class="custom-select form-control" name="gender">
														<option value="--Select Gender--">--Select Gender--</option>
														<option value="male">Male</option>
														<option value="female">Female</option>

													</select>
												</div>
											</div>
<?php
include_once('includes/db.php');
$query = "SELECT * FROM class WHERE status = '0'";
$result = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($result)){
	$project[] = $row;
// $classes =	$row['name'];
}

?>
											<div class="col-md-4">
												<div class="form-group">
													<label>Class :</label>
													<select class="custom-select form-control" name="class">
														<option value="--Select Class--">--Select Gender--</option>
														<?php
														foreach($project as $class){?>

															<option value="<?php echo $class['name']?>"><?php echo $class['name'] ?></option>
														<?php }
														?>

													</select>
												</div>
											</div>

											<div class="col-md-4">
												<div class="form-group">
													<label>Date of Birth :</label>
													<input name="dob" type="date" class="form-control" placeholder=""  value="<?php echo $birth?>"/>
												</div>
											</div>


											<div class="col-md-6">
												<div class="form-group">
													<label>State of Origin/Region :</label>
													<input name="state" type="text" class="form-control" placeholder=""  value="<?php echo $state?>"/>
												</div>
											</div>


											<div class="col-md-6">
												<div class="form-group">
													<label>L.G.A Origin/Region :</label>
													<input name="lga" type="text" class="form-control" placeholder=""  value="<?php echo $lga?>" />
												</div>
											</div>

										</div>
										<!-- row start -->

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Home Town :</label>
													<input name="town" type="text" class="form-control" placeholder=""  value="<?php echo $town?>"/>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label>Email Address :</label>
													<input type="email" placeholder="@gmail.com" name="email" class="form-control"  value="<?php echo $email?>" />
												</div>
											</div>

										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Phone Number :</label>
													<input type="text" name="phone" class="form-control"  value="<?php echo $phone?>" />
												</div>
											</div>

											<div class="col-md-7">
												<div class="form-group">
													<label>Address :</label>
													<input type="text" name="address" class="form-control"  value="<?php echo $address?>"/>
												</div>
											</div>
											<!-- </div> -->


											<div class="col-md-6">
												<div class="form-group">
													<label>Password :</label>
													<input type="password" class="form-control" name="pass" placeholder="**********" value="<?php echo $pass?>">
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label>Confirm Password :</label>
													<input type="password" class="form-control" name="cpass" placeholder="**********" value="<?php echo $cpass?>">
												</div>
											</div>
										</div>



										<h5>Upload Passport</h5>
										<hr>
										<input type="file" name="img" id="" class="form-control">
										<button type="submit" class="btn-primary btn-lg mt-3 form-control" value="Submit" name="submit">Submit</button>
								</form>

							</div>
						</div>
						<div class="mt-5 text-muted text-center">
							Return to the? <a href="../index.php">Main Website</a>
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