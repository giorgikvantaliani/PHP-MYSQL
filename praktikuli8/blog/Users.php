<?php
$connect = mysqli_connect("localhost", "root", "", "blog_2026_1");
mysqli_set_charset($connect, "utf8mb4");

mysqli_query($connect, "UPDATE users SET address = 'ჭავჭავაძის 17' WHERE email = 'gioberulava@gmail.com'");
mysqli_query($connect, "DELETE FROM users WHERE id = 6");
?>