<?php
$connect = mysqli_connect("localhost", "root", "", "university_2026");

mysqli_query($connect, "INSERT INTO professor (department_id, name, lastname, birthdate, email, number, id_number) VALUES (1, 'დავით', 'კაპანაძე', '1975-05-20', 'david@gau.edu.ge', '599123456', '12345678901')");

$res = mysqli_query($connect, "SELECT * FROM professor");
echo "<h2>Professor Table</h2>";

while ($row = mysqli_fetch_assoc($res)) {
    echo "ID: " . $row['id'] . " | Name: " . $row['name'] . " " . $row['lastname'] . "<br>";
}
?>