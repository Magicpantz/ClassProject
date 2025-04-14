<?php
session_start();
$valid = false;
if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'staff') {
    $valid = true;
}
?>

<html>
    <head>
    </head>
    <body>
        <?php if ($valid): ?>
        UPDATE FINES PAGE WIP!
        <?php else: ?>
        YOU CANNOT ACCESS THIS PAGE!
        <?php endif; ?>
    </body>
</html>
