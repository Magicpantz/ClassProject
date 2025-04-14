<?php
session_start();
$user_type = isset($_SESSION['user_type']) ? $_SESSION['user_type'] : 'guest';
?>

<html>
  <head>
  <link rel="stylesheet" href="catalog.css"/>
  </head>
  <body>
    <div class="navbar">
      <div class="logo">
        <a href="index.php">Library</a>
      </div>
      <div class="nav-links">
        <?php if ($user_type === 'staff'): ?>
          <!--STAFF-->
          <a href="update_fines.php">Update Fines</a>
          <a href="update_books.php">Update Books</a>
          <a href="update_users.php">Update Users</a>
        <?php elseif ($user_type === 'patron'): ?>
          <!--PATRON-->
          <a href="catalog.php">Catalog</a>
          <a href="fines.php">Fines</a>
          <a href="account.php">My Account</a>
          <a href="books.php">Books</a>
        <?php else: ?>
            <!--GUEST-->
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        <?php endif; ?>
      </div>
    </div>
    <div class="search-container">
      <h1 class="search-title">Library Catalog Search</h1>
      <form action="search_results.php" method="GET">
        <div class="input-group">
          <input
            type="text"
            name="q"
            placeholder="Search by title, author, ISBN..."
            aria-label="Library Catalog Search"
            required>
          <button type="submit">Search</button>
        </div>
      </form>
    </div>
  </body>
</html>

