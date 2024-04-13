<?php
include("../includes/db.php");
session_start();
error_reporting(0);

$pn = htmlspecialchars($_POST['pin_name']);
if(empty($pn)){
    // $message = '<div class="alert alert-danger text-center">Field is required</div>';
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Warning</strong>: Field is Required! 
    </div>';

    // include("pin.php");
    header("location: pin.php");

    exit();
    }

if(!is_numeric($pn)){
// $message = '<div class="alert alert-danger text-center">Only Number is allowed</div>';
$_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Warning</strong>: Only Number is Required! 
</div>';
// include("pin.php");
header("location: pin.php");
exit();
}
$date = date("d-m-Y");
// $year =date("Y");

for ($i = 0; $i < $pn; $i++) {
    $num = 0000;
    $check = $num . "" . $i;
    $ran = "09377830874625253784902";
    $random1 = "032342839273482734298701273";
    $random2 = "QWERTYUIOPASDFGHJKLMNBVCXZ";
    $pin = substr(str_shuffle($ran), 0, 6);
    $s1 = substr(str_shuffle($random1), 0, 6);
    $s2 = substr(str_shuffle($random2), 0, 2);
    $serial = $s1 . "" . $s2 . "" . $check;


    $sql = "INSERT INTO pin_table(pin,serial,datep,status) VALUE('$pin', '$serial','$date','NULL')";
    $result = mysqli_query($connection, $sql);
}
// $message = '<div class="alert alert-info text-center">PIN GENERATED</div>';
$_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show text-center">
<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
<strong>Successfully</strong>: Pin is successfully Generated! 
</div>';

header("location:pin.php");
// include("pin.php");
exit();
