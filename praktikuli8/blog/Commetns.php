<?php
$connect = mysqli_connect("localhost", "root", "", "blog_2026_1");
mysqli_set_charset($connect, "utf8mb4");

mysqli_query($connect, "UPDATE commetns SET comment = 'ეს კომენტარი ჩასწორდა' WHERE id = 1");
mysqli_query($connect, "DELETE FROM commetns WHERE post_id = 5");
?>