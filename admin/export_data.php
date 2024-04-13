<?php 
include('../includes/db.php');
?>

<?php 
// if(isset($_POST["export_data"])){
// function filterData(&$str){
// $str = preg_replace("/\t/", "\\t", $str);
// $str = preg_replace("/\r?\n/", "\\n", $str);
// if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
// }
// $fileName ="members-data_".".xls";
// $fields = array('ID', 'FIRST NAME', 'LAST NAME');
// $excelData = implode("\t", array_values($fields)) . "\n";
// $query = "SELECT * FROM staff";
// $result = mysqli_query($connection, $query);
// while($row = mysqli_fetch_assoc($result)){
//   $lineData =  array($row['username'], $row['firstname'], $row['middlename'], $row['lastname'], $row['gender'],$row['dob'], $row['state'], $row['town'], $row['lg'], $row['email']);
//   array_walk($lineData, 'filterData');
//   $excelData .= implode("\t", array_values($lineData)) . "\n";

// }

// header("Content-Type: Application/xls;charset= UTF-8");
header("Content-Type: Application/vnd.ms-excel");
// header("Content-Deposition: attachment; filename =\"$fileName\"");
header("Content-Deposition: attachment; filename = excel.xls");
header('Cache-Control: max-age=0');


// echo $excelData;
// exit();}
?>