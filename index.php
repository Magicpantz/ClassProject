<?php session_unset(); ?>

<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
  <div class="container">
  <h1>Library Application</h1>
  <h2>Login:</h2>
  <form action="handlers/handle_login.php" method="POST">
    <fieldset>
      <label>
      UserID
      <input
       name="user_id"
       placeholder="Enter user-id..."
      />
      </label>
      <label>
      Password
      <input
       name="password"
       type="password"
       placeholder="Enter password..."
      />
      </label>
    </fieldset>
    <input type="submit" value="Submit"/>
  </form>
  <a href="pages/sign_up_page.php">No Account? Sign Up Here!</a>
  </div>
</body>
</html>
