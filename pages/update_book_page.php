<?php
session_start();
$user_type = $_SESSION["user_type"];
if ($user_type != "admin") {
  header("Location: ../index.php");
  exit();
}

include_once("../handlers/db_conn.php");
?>

<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
<div class="container">
  <h1>Update Book Page</h1>
  Handling book with ID: <?= htmlspecialchars($_GET["id"]); ?>
</div>
</body>
</html>
