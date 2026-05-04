<?php
$connect = mysqli_connect("localhost", "root", "", "bank_system_2026");

mysqli_query($connect, "UPDATE accounts SET balance = balance + 500 WHERE acc_num = '1515'");
mysqli_query($connect, "DELETE FROM accounts WHERE acc_num = '1717'");
?>