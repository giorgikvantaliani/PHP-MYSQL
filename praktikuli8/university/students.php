<?php
$connect = mysqli_connect("localhost", "root", "", "university_2026");

mysqli_query($connect, "UPDATE students SET number = '555001122' WHERE lastname = 'tediashvili'");
mysqli_query($connect, "DELETE FROM students WHERE id_number = '00991199'");
?>