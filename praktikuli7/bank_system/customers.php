<?php
$connect = mysqli_connect("localhost", "root", "", "bank_system_2026");

mysqli_query($connect, "INSERT INTO customers (`full name`, email, phone, address) VALUES ('Saba Meladze', 'saba@example.ge', '555000111', 'Tbilisi, Gamsakhurdia Ave')");

// SELECT
$res = mysqli_query($connect, "SELECT * FROM customers");
echo "<h2>Customers Table</h2>";

while ($row = mysqli_fetch_assoc($res)) {
    echo "ID: " . $row['id'] . " | Name: " . $row['full name'] . " | Email: " . $row['email'] . "<br>";
}
?>