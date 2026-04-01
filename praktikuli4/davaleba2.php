<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    if(isset($_POST['submit'])){
        function test(){
            $filename = "files/user.txt";
            $texti = $_POST['texti'];

            $file = fopen($filename, "w");
            fwrite($file, $texti);
            fclose($file);

            $file = fopen($filename, "r");
            $re = fread($file, filesize("$filename"));
            fclose($file);

            echo $re;
        }
    test();
    }
?>
<body>
    <form method="post">
        <input type="text" name="texti">

        <input type="submit" name="submit">

    </form>
</body>
</html>