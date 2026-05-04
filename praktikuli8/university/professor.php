<?php
$connect = mysqli_connect("localhost", "root", "", "university_2026");

mysqli_query($connect, "UPDATE professor SET lastname = 'ახალი გვარი' WHERE id = 1");
mysqli_query($connect, "DELETE FROM professor WHERE email = 'giga@gau.edu.ge'");
?>