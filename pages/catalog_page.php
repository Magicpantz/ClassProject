<?php
session_start();
include_once("../handlers/db_conn.php");

$user_type = $_SESSION["user_type"];
echo $user_type;
?>

<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
<!--STAFF VIEW TODO-->
<?php if ($user_type == "admin"): ?>
<h1>Staff View</h1>

<!--PATRON VIEW TODO-->
<?php else: ?>
<h1>Patron View</h1>

<?php endif; ?>
</body>
</html>
