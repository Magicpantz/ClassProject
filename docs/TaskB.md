---
title: Task B HTML Forms
date: \today{}
---

# Login Page

```php
<html>
<head>
  <link rel="stylesheet" href="form.css"/>
</head>
<body>
  <!--USER LOGIN-->
  <div class="form-container">
    <form action="handle_login.php" method="POST">
      <div class="form-group">
        <label for="username">Name:</label>
        <input id="username" type="text" name="username" placeholder="Enter your name">
      </div>
      
      <div class="form-group">
        <label for="password">Password:</label>
        <input id="password" type="password" name="password" placeholder="Enter your password">
      </div>
      
      <div class="form-group">
        <label for="user_type">User Type:</label>
        <select id="user_type" name="user_type">
          <option value="patron">Patron</option>
          <option value="staff">Staff</option>
        </select>
      </div>
      
      <input type="submit" class="submit-btn" value="Submit">
    </form>
    <a href="sign_up.php">Sign Up?</a>
  </div>
</body>
</html>
```

# Sign Up Page

```php
<html>
<head>
  <link rel="stylesheet" href="form.css"/>
</head>
<body>
  <div class="form-container">
    <form action="handle_sign_up.php" method="POST">
      <div class="form-group">
        <label for="username">Name:</label>
        <input id="username" type="text" name="username" placeholder="Enter your name">
      </div>
      
      <div class="form-group">
        <label for="password">Password:</label>
        <input id="password" type="password" name="password" placeholder="Enter your password">
      </div>
      
      <input type="submit" class="submit-btn" value="Submit">
    </form>
  </div>
</body>
</html>
```

# Library Catalog Search Page

```php
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
            <a href="sign_up.php">Register</a>
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
```
# Update Fines (STAFF)

```php
<?php
session_start();
$valid = false;
if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'staff') {
    $valid = true;
}
?>

<html>
    <head>
        <link rel="stylesheet" href="form.css"/>
    </head>
    <body>
        <div class="form-container">
            <form action="handle_update_fine.php" method="POST">
                <div class="form-group">
                <label for="user_id">User ID:</label>
                <input id="user_id" type="text" name="user_id" placeholder="Enter User ID"/>
                </div>

                <div class="form-group">
                <label for="fine_id">Fine ID:</label>
                <input id="fine_id" type="text" name="fine_id" placeholder="Enter Fine ID"/>
                </div>

                <div class="form-group">
                <label for="amount">Amount:</label>
                <input id="amount" type="text" name="amount" placeholder="Enter Fine New Amount"/>
                </div>

                <div class="form-group">
                <label for="book_id">Book ID:</label>
                <input id="book_id" type="text" name="book_id" placeholder="Enter Book ID"/>
                </div>

                <input type="submit" class="submit-btn" value="Submit"/>
            </form>
        </div>
    </body>
</html>
```

# Update Books (STAFF)

```php
<?php
session_start();
$valid = false;
if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'staff') {
    $valid = true;
}
?>

<html>
    <head>
        <link rel="stylesheet" href="form.css"/>
    </head>
    <body>
        <div class="form-container">
            <form action="handle_update_book.php" method="POST">
                <div class="form-group">
                <label for="book_id">Book ID:</label>
                <input id="book_id" type="text" name="book_id" placeholder="Enter Book ID"/>
                </div>

                <div class="form-group">
                <label for="book_title">Book Title:</label>
                <input id="book_title" type="text" name="book_title" placeholder="Enter Book Title"/>
                </div>

                <div class="form-group">
                <label for="book_author">Book Author:</label>
                <input id="book_author" type="text" name="book_author" placeholder="Enter Book Author"/>
                </div>

                <div class="form-group">
                <label for="book_genre">Book Genre:</label>
                <input id="book_genre" type="text" name="book_genre" placeholder="Enter Book Genre"/>
                </div>

                <div class="form-group">
                <label for="location_id">Location ID:</label>
                <input id="location_id" type="text" name="location_id" placeholder="Enter Location ID"/>
                </div>

                <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input id="isbn" type="text" name="isbn" placeholder="Enter ISBN"/>
                </div>

                <input type="submit" class="submit-btn" value="Submit"/>
            </form>
        </div>
    </body>
</html>
```

# Update Users (STAFF)

Can change users into staff

```php
<?php
session_start();
$valid = false;
if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'staff') {
    $valid = true;
}
?>

<html>
    <head>
        <link rel="stylesheet" href="form.css"/>
    </head>
    <body>
        <div class="form-container">
            <form action="handle_update_user.php" method="POST">
                <div class="form-group">
                <label for="user_id">User ID:</label>
                <input id="user_id" type="text" name="user_id" placeholder="Enter User ID">
                </div>
                <input type="submit" class="submit-btn" value="Submit"/>
            </form>
        </div>
    </body>
</html>
```

# Fines (PATRON)

```php
<?php
session_start();

// TODO need to retreive the list of fines belonging to this user from the
// session and database
?>

<html>
    <head>
        <link rel="stylesheet" href="form.css"/>
    </head>
    <body>
        <div class="form-container">
            <form action="handle_update_fine.php" method="POST">
                <div class="form-group">
                <label for="book_id">Book ID:</label>
                <input id="book_id" type="text" name="book_id" placeholder="Enter Book ID"/>
                </div>

                <div class="form-group">
                <label for="amount">Amount:</label>
                <input id="amount" type="text" name="amount" placeholder="Amount"/>
                </div>
                <input type="submit" class="submit-btn" value="Submit"/>
            </form>
        </div>
    </body>
</html>
```

# Books (PATRON)

```php
<?php
session_start();

// TODO determine which books the user has checked out
// assume that those are in a variable called $books
$books = [];
?>

<html>
    <head>
        <link rel="stylesheet" href="form.css"/>
    </head>
    <body>
        <?php foreach ($books as $book): ?>
            <p><strong>Title:</strong> <?php echo htmlspecialchars($book['title']); ?></p>
            <p><strong>Author:</strong> <?php echo htmlspecialchars($book['author']); ?></p>
            <form method="POST" action="return_book.php">
                <input type="hidden" name="book_id" value="<?php echo $row['book_id']; ?>">
                <input type="submit" value="Return Book">
            </form>
        <?php endforeach; ?>
    </body>
</html>
```

