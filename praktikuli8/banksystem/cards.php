<?php
$connect = mysqli_connect("localhost", "root", "", "bank_system_2026");

mysqli_query($connect, "UPDATE cards SET card_type = 'visa platinum' WHERE card_num = '12345678'");
mysqli_query($connect, "DELETE FROM cards WHERE id = 2");
?>