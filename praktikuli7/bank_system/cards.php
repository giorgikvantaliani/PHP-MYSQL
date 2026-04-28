<?php
$connect = mysqli_connect("localhost", "root", "", "bank_system_2026");

mysqli_query($connect, "INSERT INTO cards (account_id, card_num, card_type, exp_date) VALUES (1, '333', 'visa', '2027-05-20')");

$res = mysqli_query($connect, "SELECT * FROM cards");
echo "<h2>Cards Table</h2>";


while ($row = mysqli_fetch_assoc($res)) {
    echo "Card Num: " . $row['card_num'] . " | Type: " . $row['card_type'] . " | Exp: " . $row['exp_date'] . "<br>";
}
?>