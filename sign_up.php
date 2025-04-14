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
