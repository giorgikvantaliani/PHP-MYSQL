<?php
$connect = mysqli_connect("localhost", "root", "", "bank_system_2026");
mysqli_query($connect, "UPDATE customers SET address = 'ბათუმი' WHERE `full name` = 'nikoloz razmadze'");

mysqli_query($connect, "DELETE FROM customers WHERE id = 3");
?>