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
