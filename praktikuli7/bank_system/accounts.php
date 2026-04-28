<?php
$connect = mysqli_connect("localhost", "root", "", "bank_system_2026");

mysqli_query($connect, "INSERT INTO accounts (customers_id, acc_num, acc_type, balance) VALUES (1, '123', 'current', 2500)");

$res = mysqli_query($connect, "SELECT * FROM accounts");
echo "<h2>Accounts Table</h2>";

while ($row = mysqli_fetch_assoc($res)) {
    echo "Acc Num: " . $row['acc_num'] . " | Type: " . $row['acc_type'] . " | Balance: " . $row['balance'] . "<br>";
}
?>