<?php
$connect = mysqli_connect("localhost", "root", "", "university_2026");

mysqli_query($connect, "UPDATE courses SET credits = '5' WHERE name = 'informatics'");
mysqli_query($connect, "DELETE FROM courses WHERE name = 'management'");
?>