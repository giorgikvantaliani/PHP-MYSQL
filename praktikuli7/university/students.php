<?php
$connect = mysqli_connect("localhost", "root", "", "university_2026");

mysqli_query($connect, "INSERT INTO students (name, lastname, email, number, id_number, birthdate) 
VALUES ('გიორგი', 'მაისურაძე', 'giorgi@gau.edu.ge', '555112233', '01010101011', '2005-10-15')");

$res = mysqli_query($connect, "SELECT * FROM students");
echo "<h2>Students Table</h2>";

while ($row = mysqli_fetch_assoc($res)) {
    echo "ID: " . $row['id'] . " | Name: " . $row['name'] . " " . $row['lastname'] . "<br>";
}

?>