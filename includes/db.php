<?php

$connection = mysqli_connect("localhost", "root", "", "ogogs");
if (!$connection) {
    die("BUSY SERVER" .mysqli_error($connection));
} else {
    // echo"successful";
}
