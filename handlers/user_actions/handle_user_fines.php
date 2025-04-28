<?php
session_start();
include_once("../../handlers/db_conn.php");

if ($_SESSION["user_type"] != "patron") {
    header("Location: ../../index.php");
    exit();
}

$user_id = $_SESSION["user_id"];
$amount_paid = $_POST["amount"];

// Ensure that the payment amount is valid
if (!isset($amount_paid) || !is_numeric($amount_paid) || $amount_paid <= 0) {
    echo "Invalid amount entered.";
    exit();
}

// Get the fine ID and the original fine amount from the POST data
$fine_id = $_POST["fine_id"];  // Assuming the fine ID is passed from the form

// Fetch the fine details from the database to check the fine's amount
$get_fine_query = "SELECT * FROM Fines WHERE FineID = $fine_id AND UserLibraryID = $user_id";
$fine_result = mysqli_query($conn, $get_fine_query);
$fine = mysqli_fetch_assoc($fine_result);

// Check if the fine exists
if (!$fine) {
    echo "Fine not found";
    exit();
}

// Check if the amount paid is enough to cover the fine
if ($amount_paid < $fine['Amount']) {
    echo "The amount you paid is less than the fine amount.";
    exit();
}

// Process the payment (update the fine status and balance)
$remaining_balance = $fine['Amount'] - $amount_paid;

if ($remaining_balance <= 0) {
    // Fine paid off, remove the fine
    $update_fine_query = "DELETE FROM Fines WHERE FineID = $fine_id AND UserLibraryID = $user_id";
    if (mysqli_query($conn, $update_fine_query)) {
        echo "Fine paid off successfully.";
    } else {
        echo "Error paying off fine: " . mysqli_error($conn);
    }
} else {
    // Update the fine with the new remaining balance
    $update_fine_query = "UPDATE Fines SET Amount = $remaining_balance WHERE FineID = $fine_id";
    if (mysqli_query($conn, $update_fine_query)) {
        echo "Partial payment accepted. Remaining balance: $remaining_balance.";
    } else {
        echo "Error updating fine: " . mysqli_error($conn);
    }
}

header("Location: ../pages/pay_fines.php");
exit();
?>
