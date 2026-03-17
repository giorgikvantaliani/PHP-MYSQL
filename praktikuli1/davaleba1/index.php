<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    if(isset($_GET['gagzavna'])){
        $xelfasi = $_GET['salary'];
        echo $xelfasi - ($xelfasi * 0.2);
        
        $procenti = $_GET['procenti'];
        echo $xelfasi - ($xelfasi * $procenti / 100);
    }
?>
<body>
    <form method="GET">
        saxeli: <input type="text" name="name" >
        <br><br>
        gvari: <input type="text" name="lname">
        <br><br>
        pozicia: <input type="text" name="position">
        <br><br>
        xelfasi: <input type="number" name="salary">
        <br><br>
        procenti: <input type="number" name="procenti">
        <br><br>
        <button type="submit" value="gagzavna">send</button>
    </form>
</body>
</html>