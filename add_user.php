<?php
$host = "db";
$user = "root";
$password = "password";
$database = "test_db";
$port = 3306;

// Create connection
$conn = new mysqli($host, $user, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Failed Connection :((");
} else {
    echo "Successful Connection!<br>";

    // Retrieve data
    $sql = "SELECT * FROM test";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            print_r($row);
            echo "<br>";
        }
    } else {
        echo "0 results";
    }
}

// Close connection
$conn->close();
echo $_POST['username']
?>

