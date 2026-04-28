<?php
$connect = mysqli_connect("localhost", "root", "", "university_2026");

mysqli_query($connect, "INSERT INTO enrollments (students_id, courses_id, enrollments_date) VALUES (1, 1, '2026-04-29 10:00:00')");

$res = mysqli_query($connect, "SELECT * FROM enrollments");
echo "<h2>Enrollments Table</h2>";

while ($row = mysqli_fetch_assoc($res)) {
    echo "ID: " . $row['id'] . " | Student ID: " . $row['students_id'] . " | Course ID: " . $row['courses_id'] . "<br>";
}
?>