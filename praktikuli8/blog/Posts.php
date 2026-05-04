<?php
$connect = mysqli_connect("localhost", "root", "", "blog_2026_1");
mysqli_set_charset($connect, "utf8mb4");

mysqli_query($connect, "UPDATE posts SET title = 'განახლებული სათაური' WHERE id = 1");
mysqli_query($connect, "DELETE FROM posts WHERE user_id = 4");
?>