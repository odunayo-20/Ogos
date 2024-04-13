<!-- <script>
    if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }
</script> -->

<?php

session_start();
include("includes/db.php");
?>
 											<?php
                                                // $data = $_SESSION['data'];
                                                // $serial = $_SESSION['serial'];
                                                ?>

<?php
if(isset($_POST['submit']) && $_POST['randcheck']== $_SESSION['rand']){

$datep = date("Y/m/d");
$year = date("Y");

$serial1 = htmlentities($_POST['serial']);
$firstname = htmlspecialchars($_POST['fname']) ;
$middlename = htmlspecialchars( $_POST['mname']);
$lastname = htmlspecialchars( $_POST['lname']);
$gender = htmlspecialchars( $_POST['gender']);
$birth = htmlspecialchars( $_POST['dob']);
$state = htmlspecialchars( $_POST['state']);
$town = htmlspecialchars( $_POST['town']);
$lga = htmlspecialchars($_POST['lga']) ;
$email = htmlspecialchars( $_POST['email']);
$phone = htmlspecialchars($_POST['phone']) ;
$address = htmlspecialchars($_POST['address']) ;
$staff = htmlspecialchars($_POST['staff']) ;
$year_employed = htmlspecialchars( $_POST['year_employed']);

$pass = htmlspecialchars( $_POST['pass']);
$cpass = htmlspecialchars($_POST['cpass']) ;
$password = htmlspecialchars( md5($pass));
$cpassword = htmlspecialchars( md5($cpass));
// }
if (empty($firstname) || empty($middlename) || empty($lastname) || empty($birth) || empty($state) || empty($town) || empty($lga) || empty($email) || empty($phone) || empty($address) || empty($password) || empty($cpassword)) {
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Warning</strong>: All Fields are Required! 
</div>';


    include("staff-form.php");
    exit();
}

if ($gender == "--Select Gender--") {
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Warning</strong>: Gender Should be Selected! 
</div>';

    include("staff-form.php");
    exit();
}

if ($staff == "--Select Category--") {
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Staff Should be Selected! 
    </div>';

    include("staff-form.php");
    exit();
}

if ($year_employed == "--Select Year--") {
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Warning</strong>: Year Should be Selected! 
</div>';

    include("staff-form.php");
    exit();
}


if ($password !== $cpassword) {
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Password not alike! 
    </div>';

    include("staff-form.php");
    exit();
}
$img_name = $_FILES['img']['name'];
$img_tmp = $_FILES['img']['tmp_name'];

///upload picture start
// $fileName = $_FILES["pix"]["tmp_name"];

$fileinfo = PATHINFO($_FILES["img"]["name"]);
$newFilename = $fileinfo['filename'] . "_" . time() . "." . $fileinfo['extension'];
$pic = "upload/". $newFilename;
//////upload pic end

if (empty($img_name) || empty($img_tmp)) {
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Warning</strong>: Image should be Choose! 
        </div>';

    include("staff-form.php");
    exit();
}

for ($i = 0; $i < 1; $i++) {
    # code...
    $name = "ogooluwa";
    $random1 = "0987654321678930";
    $random2 = "ASDFGHJLPOIUYTREWQZXCVBNM";
    $s1 = substr(str_shuffle($random1), 0, 4);
    $s2 = substr(str_shuffle($random2), 0, 2);
    $username = $name . "/" . $year . "/" . $staff . "/" . $s1 . "" . $s2;
    
    $look = "SELECT * FROM staff WHERE serial = '$serial1'";
    $lookresult = mysqli_query($connection,$look);
    
    if(mysqli_num_rows($lookresult) != 1){
        $serial1 = $serial1; 
    }else{
        $query = "UPDATE staff SET username = '$username', img = '$pic', serial = '$serial1', firstname = '$firstname', middlename = '$middlename', lastname ='$lastname', gender = '$gender', dob = '$birth', state = '$state', town = '$town', lg = '$lga', email = '$email', phone = '$phone', location = '$address', category = '$staff', year_employed = '$year_employed', datep = '$datep'";

        $result = mysqli_query($connection, $query);
        move_uploaded_file($_FILES['img']['tmp_name'], "upload/$newFilename");
        if (!$result) {
            die("SERVER BUSY" . mysqli_error($connection));
        } else {
            $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Successfully</strong>: Record is successfully created! 
        </div>';
        
        
            header("location:staff-confirm.php");
            exit();
        }
        
        // $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
        // <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        // <strong>Warning</strong>: serial number already exit; 
        // </div>';

    include("staff-confirm.php");
    exit();

    }
}

$query = "INSERT INTO staff(username,serial,firstname,middlename,lastname,gender,dob,state,town,lg,email,phone,location,category,year_employed,password,img,datep) VALUE('$username','$serial1','$firstname','$middlename','$lastname','$gender','$birth','$state','$town','$lga','$email','$phone','$address','$staff','$year_employed','$password','$pic','$datep')";
$result = mysqli_query($connection, $query);

$update = "UPDATE pin_table SET pin_user = '$username' WHERE serial = '$serial1'";
$updateResult = mysqli_query($connection, $update);


$null = "UPDATE pin_table SET status = 'USED' WHERE serial ='$serial1'";
$nullset = mysqli_query($connection, $null);



move_uploaded_file($_FILES['img']['tmp_name'], "upload/$newFilename");
if (!$result) {
    die("SERVER BUSY" . mysqli_error($connection));
} else {
    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Successfully</strong>: Record is successfully created! 
</div>';


    header("location:staff-confirm.php");
    exit();
}

}




?>