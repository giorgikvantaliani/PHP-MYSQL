<?php
$connect = mysqli_connect("localhost", "root", "", "university_2026");

mysqli_query($connect, "INSERT INTO department (name) VALUES ('Law')");

$res = mysqli_query($connect, "SELECT * FROM department");
echo "<h2>Department Table</h2>";

while ($row = mysqli_fetch_assoc($res)) {
    echo "ID: " . $row['id'] . " | Name: " . $row['name'] . "<br>";
}
?>