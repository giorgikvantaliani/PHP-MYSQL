<?php
$connect = mysqli_connect("localhost", "root", "", "blog_2026_1");

mysqli_query($connect, "INSERT INTO categorys (name) VALUES ('technology')");

$res_cats = mysqli_query($connect, "SELECT * FROM categorys");
echo "<h3>categories:</h3>";

while ($row = mysqli_fetch_assoc($res_cats)) {
    echo "category: " . $row['name'] . "<br>";
}
?>