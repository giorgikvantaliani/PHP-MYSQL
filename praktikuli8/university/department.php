<?php
$connect = mysqli_connect("localhost", "root", "", "university_2026");

mysqli_query($connect, "UPDATE department SET name = 'Information Technologies' WHERE name = 'It'");
mysqli_query($connect, "DELETE FROM department WHERE id = 3");
?>