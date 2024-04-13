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
$sql="SELECT * from admission WHERE id = '$id'";
$q=mysqli_query($connection,$sql);
while ($rows=mysqli_fetch_assoc($q)) {
    $id=$rows["id"];
    $surname=$rows['surname'];
    $img=$rows['pic'];
$othernames=$rows['othernames'];
$email=$rows['email'];
$gender=$rows['gender'];
$nation=$rows['nation'];
$state=$rows['state'];
$town=$rows['town'];
$dob=$rows['dob'];
$branch=$rows['branch'];
$section=$rows['section'];
$phone=$rows['phone'];
$class=$rows['class'];

$guardians_relationship=$rows['relationship'];
$guardians_name=$rows['guardians_name'];
$guardians_phone=$rows['guardians_phone'];
$guardians_email=$rows['guardians_email'];
$guardians_address=$rows['guardians_address'];
    
$student_name = $surname. " " .$othernames ;

   }

?>


<div class=" container-fluid">
				<div class="card" >
					<div class="page-header" style="background:77C7F4; color: ;">
						<div class="row">
							
							<div class="col-md-12 col-sm-12" style="text-align:center">
								<table class="table col-md-12" border="" style="margin:0px auto">
                                <tr>
                                        <td colspan="3" align="center" style="background-color: rgb(59, 15, 129);"></td>
</tr>
                                    <tr>
                                    <td align=center colspan="5"><img src="./assets/img/logo/logo.png" width="100px" height="100px" class="img-fluid" /></td>

                                    </tr>
									<tr>
                                    <td align=center colspan="5">STUDENT PERSONAL INFORMATION</td>
                                    
                                    </tr>
                                    <tr>
                                    <td align="left">
                                        <strong ><b>Surname:</b></strong> <span ><?php echo $surname ?></span><br>
                                        <strong><b>Othernames:</b></strong> <span style=""><?php echo $othernames ?></span><br>
                                        <strong><b>Gender:</b></strong> <span style=""><?php echo $gender ?></span><br>
                                    <!-- </td> -->
                                    
                                    <!-- <td align=left colspan=""> -->
                                    
                                    <strong ><b>Date of Birth:</b></strong> <span ><?php echo $dob ?></span><br>
                                    <strong><b>NATION:</b></strong> <span style=""><?php echo  $nation ?></span><br>
                                        <strong><b>State:</b></strong> <span style=""><?php echo  $state ?></span><br>
                                        <strong><b>Home Town:</b></strong> <span style=""><?php echo $town ?></span><br>

                                    </td>
                                    
                                    <td align=center colspan="" width="20%"><img src="../<?php echo $img ?>" class="img-fluid" width="150px" height="150"></td>
                                    </tr>
                                    <tr align=center>
                                        <td colspan="3">
                                        STUDENT CONTACT INFORMATION
                                        
                                        </td>
                                    </tr>
                                    <tr align=left>
                                        <td colspan="3">
                                        <strong ><b>Phone Number:</b></strong> <span style="margin-bottom:10px"><?php echo $phone ?></span><br>
                                        <strong><b>Official Email:</b></strong> <span style=""><?php echo $email ?></span><br>
                                        <strong><b>Address:</b></strong> <span style=""><?php echo  $location ?></span><br>
                                        
                                        </td>
                                    </tr>
                                    <tr align=center>
                                        <td colspan="3">
                                        STUDENT SCHOOL INFORMATION
                                        
                                        </td>
                                    </tr>
                                    <tr align=left>
                                        <td colspan="3">
                                        <strong ><b>BRANCH:</b></strong> <span style="margin-bottom:10px"><?php echo $branch?></span><br>
                                        <strong><b>CLASS:</b></strong> <span style=""><?php echo $class ?></span><br>
                                        <strong><b>SECTION:</b></strong> <span style=""><?php echo  $section ?></span><br>
                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" align="center" style="text-transform: uppercase;">guardians INFORMATION</td>
</tr>
                                    <tr align=left>
                                        <td colspan="3">
                                            <strong><b style="text-transform:capitalize">guardians relationship:</b></strong> <span ><?php echo $guardians_relationship ?></span><br>
                                            <strong><b style="text-transform:capitalize">guardians name:</b></strong> <span ><?php echo $guardians_name ?></span><br>
                                            <strong><b style="text-transform:capitalize">guardians phone:</b></strong> <span ><?php echo $guardians_phone ?></span><br>
                                            <strong><b style="text-transform:capitalize">guardians email:</b></strong> <span ><?php echo $guardians_email ?></span><br>
                                            <strong><b style="text-transform:capitalize">guardians address:</b></strong> <span ><?php echo $guardians_address ?></span><br>
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

