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
