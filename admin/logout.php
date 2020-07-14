<?php
session_start();
$_SESSION['admin'];
unset($_SESSION['admin']);
header("location:../index.php");
