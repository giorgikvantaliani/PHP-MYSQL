<?php
$connect = mysqli_connect("localhost", "root", "", "bank_system_2026");

mysqli_query($connect, "INSERT INTO transactions (account_id, type, amount, transaction_date) VALUES (1, 'transfer', 150, '2026-04-29')");

// SELECT
$res = mysqli_query($connect, "SELECT * FROM transactions");
echo "<h2>Transactions Table</h2>";

while ($row = mysqli_fetch_assoc($res)) {
    echo "Date: " . $row['transaction_date'] . " | Type: " . $row['type'] . " | Amount: " . $row['amount'] . "<br>";
}
?>