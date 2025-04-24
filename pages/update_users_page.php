<?php
session_start();
if ($_SESSION["user_type"] != "admin") {
  header("Location: ../index.php");
  exit();
}
?>

<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
<div class="container">
  <h1>Update Users Page</h1>
</div>
</body>
</html>
