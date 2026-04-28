<?php
$connect = mysqli_connect("localhost", "root", "", "bank_system_2026");

mysqli_query($connect, "INSERT INTO employees (name, role, branch) VALUES ('Nino', 'Consultant', 'Kutaisi branch')");

$res = mysqli_query($connect, "SELECT * FROM employees");
echo "<h2>Employees Table</h2>";

while ($row = mysqli_fetch_assoc($res)) {
    echo "Name: " . $row['name'] . " | Role: " . $row['role'] . " | Branch: " . $row['branch'] . "<br>";
}
?>