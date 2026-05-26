<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "f1_db";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("ბაზასთან კავშირი ჩაიშალა: " . mysqli_connect_error());
}
?>