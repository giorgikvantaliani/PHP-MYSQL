<?php

$connect = mysqli_connect("localhost", "root", "", "blog_2026_1");

$sql_post = "INSERT INTO posts (category_id, user_id, title, text) 
             VALUES (1, 1, 'first_blog, 'first_txt')";
mysqli_query($connect, $sql_post);

$res_posts = mysqli_query($connect, "SELECT * FROM posts");
echo "<h3>posts:</h3>";

while ($row = mysqli_fetch_assoc($res_posts)) {
    echo "title: " . $row['title'] . "<br>text: " . $row['text'] . "<hr>";
}
?>