<?php
session_start();

// connect to the database
$host = "db";
$user = "root";
$password = "password";
$database = "test_db";
$port = 3306;
$conn = new mysqli($host, $user, $password, $database, $port);

// login using the database
$username = $_POST['username'];
$password = $_POST['password'];

// TODO fix this username != userid
$login_query = mysqli_real_escape_string($conn, "SELECT UserLibraryID FROM User WHERE UserLibraryID=$username;");

// what shows here?
$result = $conn->query($statement);
echo $result;

// set the user_type in the session
$_SESSION['user_type'] = $_POST['user_type'];

// redirect
header("Location: ../pages/catalog_page.php");
exit();
?>
