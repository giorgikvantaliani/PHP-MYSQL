<?php

$connect = mysqli_connect("localhost", "root", "", "blog_2026_1");

$sql_comm = "INSERT INTO commetns (post_id, user_id, comment) 
             VALUES (1, 1, 'very nice post!')";
mysqli_query($connect, $sql_comm);

$res_comm = mysqli_query($connect, "SELECT * FROM commetns");
echo "<h3>comments:</h3>";

while ($row = mysqli_fetch_assoc($res_comm)) {
    echo "comment: " . $row['comment'] . " (date: " . $row['created_at'] . ")<br>";
}

?>