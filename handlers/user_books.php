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
