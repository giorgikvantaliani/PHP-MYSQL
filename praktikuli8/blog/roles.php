<?php
$connect = mysqli_connect("localhost", "root", "", "blog_2026_1");
mysqli_set_charset($connect, "utf8mb4");

mysqli_query($connect, "UPDATE roles SET role = 'guest' WHERE id = 3");
mysqli_query($connect, "DELETE FROM roles WHERE role = 'editor'");
?>