<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    if(isset($_POST['submit'])){
        $_arr = [];
        $metia=0;
        $naklebia=0;
        $x = $_POST['x'];
        for($i=0; $i<12; $i++){
            $_arr[$i]= rand(10,100);
        }

        foreach($_arr as $value){
            echo $value, "<br>";
        }
        for($i=0; $i<12; $i++){
            if($_arr[$i] > $x){
                $metia++;
            } elseif($_arr[$i] > $x){
                $naklebia++;
            }
        }
        echo $metia .'metia';
        echo "<br>","<br>";
        echo $naklebia .'naklebia';
    }
    

?>
<body>
    <form method="post">
        <input type="number" name="x" min="10" max="100">
        <br><br>
        <button type="submit" name="submit">send</button>
    </form>
</body>
</html>