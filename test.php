<?php
$host = '127.0.0.1';
$user = 'root';
$password = 'password';
$port = 9000;

// Create connection
$connection = new mysqli($host, $user, $password, "", $port);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

echo "Connected successfully!";
?>
