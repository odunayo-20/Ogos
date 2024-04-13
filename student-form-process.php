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

$datep = date("Y/m/d H:i:s");
// $year = date("Y");

$serial1 = htmlspecialchars($_POST['serial']);
$firstname = htmlspecialchars($_POST['fname']) ;
$middlename = htmlspecialchars( $_POST['mname']);
$lastname = htmlspecialchars( $_POST['lname']);
$gender = htmlspecialchars( $_POST['gender']);
$class = htmlspecialchars( $_POST['class']);
$birth = htmlspecialchars($_POST['dob']) ;
$state = htmlspecialchars( $_POST['state']);
$town = htmlspecialchars($_POST['town']) ;
$lga = htmlspecialchars( $_POST['lga']);
$email = htmlspecialchars( $_POST['email']);
$phone = htmlspecialchars( $_POST['phone']);
$address = htmlspecialchars( $_POST['address']);

$pass = htmlspecialchars( $_POST['pass']);
$cpass = htmlspecialchars( $_POST['cpass']);
$password = htmlspecialchars(md5($pass)) ;
$cpassword = htmlspecialchars(md5($cpass)) ;
// }
if (empty($firstname) || empty($middlename) || empty($lastname) || empty($birth) || empty($state) || empty($town) || empty($lga) || empty($email) || empty($phone) || empty($address) || empty($password) || empty($cpassword)) {
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Warning</strong>: All Fields are Required! 
</div>';


    include("student-form.php");
    exit();
}

if ($gender == "--Select Gender--") {
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Warning</strong>: Gender Should be Selected! 
</div>';

    include("student-form.php");
    exit();
}




if ($password !== $cpassword) {
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Password not alike! 
    </div>';

    include("student-form.php");
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
    // $random2 = "ASDFGHJLPOIUYTREWQZXCVBNM";

$s = 1;
    $s2 = $s++;
    $student = "student";
    $s1 = substr(str_shuffle($random1), 0, 4);
    // $s2 = substr(str_shuffle($random2), 0, 2);
    // $username = $name . "/" . $year . "/" . $student . "/" . $s1 . "" . $s2;
    $username = $name . "/" . $year . "/" . $student . "/" . $s1 . "" . $s2;

    // if(isset($serial1)){
    
    $look = "SELECT * FROM student WHERE serial = '$serial1'";
    $lookresult = mysqli_query($connection,$look);
    
    if(mysqli_num_rows($lookresult) == 1){
        $serial1 = $serial1; 

        $query = "UPDATE student SET username = '$username', img = '$pic', firstname = '$firstname', middlename = '$middlename', lastname ='$lastname', gender = '$gender', class= '$class', dob = '$birth', state = '$state', town = '$town', lg = '$lga', email = '$email', phone = '$phone', location = '$address', datep = '$datep' WHERE serial = '$serial1'";

        $result = mysqli_query($connection, $query);
        move_uploaded_file($_FILES['img']['tmp_name'], "upload/$newFilename");
        if (!$result) {
            die("SERVER BUSY" . mysqli_error($connection));
        } else {
            $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Successfully</strong>: Record is successfully created! 
        </div>';
        
        
            header("location:student-confirm.php");
            exit();
        }
        

    include("student-confirm.php");
    exit();

    }else{
        $query = "INSERT INTO student(username,serial,firstname,middlename,lastname,gender,class, dob,state,town,lg,email,phone,location,password,img,datep) VALUE('$username','$serial1','$firstname','$middlename','$lastname','$gender', '$class','$birth','$state','$town','$lga','$email','$phone','$address','$password','$pic','$datep')";
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
        
        
            header("location:student-confirm.php");
            exit();
        }
        
        
    }

}

}


?>