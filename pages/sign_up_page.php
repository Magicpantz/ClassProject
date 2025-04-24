<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
  <div class="container">
  <h1>Library Application</h1>
  <h2>Sign Up:</h2>
  <form action="../handlers/handle_sign_up.php" method="POST">
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
  </div>
</body>
</html>
