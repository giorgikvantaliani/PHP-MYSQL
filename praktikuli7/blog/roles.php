<?php

$connect = mysqli_connect("localhost", "root", "", "blog_2026_1");

mysqli_query($connect, "INSERT INTO roles (role) VALUES ('editor')");

$res_roles = mysqli_query($connect, "SELECT * FROM roles");
echo "<h3>roles:</h3>";

while ($row = mysqli_fetch_assoc($res_roles)) {
    echo "ID: " . $row['id'] . " - name: " . $row['role'] . "<br>";
}

?>