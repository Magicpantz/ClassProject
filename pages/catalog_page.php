<?php
session_start();
$user_type = $_SESSION["user_type"];
?>

<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>

<!--STAFF VIEW-->
<?php if ($user_type == "admin"): ?>
<div class="container">
  <nav>
    <ul>
      <li><strong>Library Application</strong></li>
    </ul>
    <ul>
    <li><a href="../pages/update_users_page.php">Update Users</a></li>
    <li><a href="../pages/update_fines_page.php">Update Fines</a></li>
    </ul>
  </nav>
  <h1>Staff View</h1>
  <form role="search" action="search_results_page.php" method="POST">
    <input type="search" name="query" placeholder="Enter a book title..."/>
    <button type="submit">Search</button>
  </form>
</div>

<!--PATRON VIEW-->
<?php else: ?>
<div class="container">
  <nav>
    <ul>
      <li><strong>Library Application</strong></li>
    </ul>
    <ul>
    <li><a href="../pages/pay_fines_page.php">Pay Fines</a></li>
    </ul>
  </nav>
  <h1>Patron View</h1>
  <form role="search" action="search_results_page.php" method="POST">
    <input type="search" name="query" placeholder="Enter a book title..."/>
    <button type="submit">Search</button>
  </form>
</div>

<?php endif; ?>
</body>
</html>
