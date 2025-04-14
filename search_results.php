<?php $books = ["Book 1", "Book 2", "Book 3"]; ?>
<html>
<head>
</head>
<body>
    UNDER CONSTRUCTION
    <ul>
    <?php foreach ($books as $b): ?>
        <li><?php echo htmlspecialchars($b); ?></li>
    <?php endforeach; ?>
    </ul>
    QUERY WAS: <?php echo $_GET['q']; ?>
</body>
</html>

