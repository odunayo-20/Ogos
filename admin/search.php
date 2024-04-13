<?php
include_once('../includes/db.php');

if (isset($_GET['search'])) {
    $search = $_GET['search'];

    $sql = "SELECT * FROM pin_table WHERE status LIKE '%used%'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row['pin_user'] . "Data: " . $row['status'] . '<br>';
        }
    } else {
        echo "No results found.";
    }
}
