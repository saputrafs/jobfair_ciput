<?php
session_start();
$_SESSION['perusahaan'];
unset($_SESSION['perusahaan']);
header("location:../index.php");
