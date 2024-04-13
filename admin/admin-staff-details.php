<?php  error_reporting(0);
session_start();
?>

<?php include("includes/header.php");?>

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


    <div class="container-fluid ">
        <!-- <div class="section mx-auto bg-light " style="width: 70%;  margin-top: 80px;"> -->
        <?php

$id = $_GET['id'];
$query = "SELECT * FROM staff WHERE staff_id = '$id'";
$result = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $username = $row['username'];
    $firstname = $row['firstname'];
    $middlename = $row['middlename'];
    $lastname = $row['lastname'];
    $gender = $row['gender'];
    $dob = $row['dob'];
    $state = $row['state'];
    $town = $row['town'];
    $lga = $row['lg'];
    $email = $row['email'];
    $phone = $row['phone'];
    $location = $row['location'];
    $img = $row['img'];
    $category = $row['category'];
    $year_employed = $row['year_employed'];
    $pass = $row['password'];
    $cpass = $row['password'];
}

switch ($category) {
    case 'NTS':
        # code...
        $Category = 'Non Teaching staff';
        break;

    case 'TS':
        # code...
        $Category = 'Teaching staff';
        break;

    default:
        # code...
        break;
}

switch ($year_employed) {
    case '7':
        # code...
        $Year_employed = '2023';
        break;

    case '6':
        # code...
        $Year_employed = '2022';
        break;

    case '5':
        # code...
        $Year_employed = '2021';
        break;

    case '4':
        # code...
        $Year_employed = '2020';
        break;

    case '3':
        # code...
        $Year_employed = '2019';
        break;

    case '2':
        # code...
        $Year_employed = '2018';
        break;

    case '1':
        # code...
        $Year_employed = '2017';
        break;

    default:
        # code...
        break;
}

?>


<div class=" container-fluid">
				<div class="card" >
					<div class="page-header" style="background:77C7F4; color: ;">
						<div class="row">
							
							<div class="col-md-12 col-sm-12" style="text-align:center">
								<table class="table" border="" style="margin:0px auto">
                                <tr>
                                        <td colspan="3" align="center" style="background-color: rgb(59, 15, 129);"></td>
</tr>
                                    <tr>
                                    <td align=center colspan="5"><img src="./assets/img/logo/logo.png" width="100px" height="100px" class="img-fluid" /></td>

                                    </tr>
									<tr>
                                    <td align=center colspan="5">STAFF PERSONAL INFORMATION</td>
                                    
                                    </tr>
                                    <tr>
                                    <td align="left">
                                    <strong><b>Staff Username:</b></strong> <span style=""><?php echo $username ?></span><br>
                                        <strong ><b>First Name:</b></strong> <span ><?php echo $firstname ?></span><br>
                                        <strong><b>Last Name:</b></strong> <span style=""><?php echo $lastname ?></span><br>
                                        <strong><b>Middle Name:</b></strong> <span style=""><?php echo $middlename ?></span><br>
                                        <strong><b>Gender:</b></strong> <span style=""><?php echo $gender ?></span><br>
                                    <!-- </td> -->
                                    
                                    <!-- <td align=left colspan=""> -->
                                    
                                    <strong ><b>Date of Birth:</b></strong> <span ><?php echo $dob ?></span><br>
                                        <strong><b>State:</b></strong> <span style=""><?php echo  $state ?></span><br>
                                        <strong><b>LGA:</b></strong> <span style=""><?php echo $lga ?></span><br>
                                        <strong><b>Home Town:</b></strong> <span style=""><?php echo $town ?></span><br>
                                    </td>
                                    
                                    <td align=center colspan="" width="20%"><img src="../<?php echo $img ?>" class="img-fluid" width="150px" height="150"></td>
                                    </tr>
                                    <tr align=center>
                                        <td colspan="3">
                                        STAFF CONTACT INFORMATION
                                        
                                        </td>
                                    </tr>
                                    <tr align=left>
                                        <td colspan="3">
                                        <strong ><b>Phone Number:</b></strong> <span style="margin-bottom:10px"><?php echo $phone ?></span><br>
                                        <strong><b>Official Email:</b></strong> <span style=""><?php echo $email ?></span><br>
                                        <strong><b>Address:</b></strong> <span style=""><?php echo  $location ?></span><br>
                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" align="center">STAF EMPLOYEMENT INFORMATION</td>
</tr>
                                    <tr align=left>
                                        <td colspan="3">
                                            <strong><b>Staff:</b></strong> <span style=""><?php echo $Category ?></span><br>
                                        <strong><b>Year Employed:</b></strong> <span style=""><?php echo$Year_employed ?></span><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" align="center" style="background-color: rgb(59, 15, 129);"></td>
</tr>
								</table>
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
<?php include("includes/footer.php");?>

