---
title: Task B
author: Logan Jackson
date: \today{}
---

*This is preliminary report* In this report are the views i.e. `.php` files
containing the forms and such.

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


