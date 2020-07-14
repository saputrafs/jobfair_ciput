<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "jobfair";
$koneksi = mysqli_connect($host, $user, $pass, $db);
if (mysqli_connect_errno()) {
    echo 'Error:' . mysqli_connect_error();
} else { }
error_reporting(0);
