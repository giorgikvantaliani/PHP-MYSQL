<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    $arr = [];
    for($i=0; $i<12; $i++){
        $arr[] = rand(10,100);
    }
    print_r($arr);

    if(isset($_POST['f-submit'])){
        $x = $_POST['x'];
        $metia = 0;
        $naklebia = 0;

        for($i=0; $i < count($arr); $i++){
            if($x > $arr[$i]){
                $metia++;
            } elseif($x < $arr[$i]){
                $naklebia++;
            }
        }
        echo print_r($arr);
        echo "<br>";
        echo "{$x} metia {$metia} da naklebia {$naklebia}-ze";
    }
?>
<body>
    <form method="post">
        x: <input type="number" name="x">
        <br><br>
        <button type="submit" name="f-submit">send</button>
    </form>
</body>
</html>