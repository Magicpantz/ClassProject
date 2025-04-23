<?php
session_start();

// in real life these are stored in prod envs but is just local proof of concept
// and just want it to work super seamless
/*
$host = "db";
$user = "root";
$password = "password";
$database = "test_db";
$port = 3306;
$conn = new mysqli($host, $user, $password, $database, $port);

$username = $_POST['username'];
$password = $_POST['password'];
*/

$_SESSION['user_type'] = $_POST['user_type'];
header("Location: catalog_view.php");
exit();
?>
