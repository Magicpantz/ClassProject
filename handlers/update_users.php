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
