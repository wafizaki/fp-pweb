<?php
session_start();
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$database = "fp_pweb";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword,$database);

if (!$conn) {
    echo "Connected unsuccessfully";
    die("Connection failed: " . mysqli_connect_error());
}
?>
