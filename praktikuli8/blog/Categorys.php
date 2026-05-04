<?php
$connect = mysqli_connect("localhost", "root", "", "blog_2026_1");
mysqli_set_charset($connect, "utf8mb4");

mysqli_query($connect, "UPDATE categorys SET name = 'ახალი ამბები' WHERE id = 1");
mysqli_query($connect, "DELETE FROM categorys WHERE id = 2");
?>