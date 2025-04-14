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
