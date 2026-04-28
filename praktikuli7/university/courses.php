<?php
$connect = mysqli_connect("localhost", "root", "", "university_2026");

mysqli_query($connect, "INSERT INTO courses (department_id, name, credits) VALUES (1, 'Cybersecurity', '6')");

$res = mysqli_query($connect, "SELECT * FROM courses");
echo "<h2>Courses Table</h2>";

while ($row = mysqli_fetch_assoc($res)) {
    echo "ID: " . $row['id'] . " | Name: " . $row['name'] . " | Credits: " . $row['credits'] . "<br>";
}
?>