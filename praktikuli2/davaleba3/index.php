<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    $arr = [];
    for ($i=0; $i < 6; $i++) { 
        for ($j=0; $j < 5; $j++) { 
            $arr[$i][$j] = $i + $j;
        }
    }

    echo "<table border='1'>";
    for ($i=0; $i < count($arr); $i++) { 
        echo "<tr>";
        for ($j=0; $j < count($arr[0]); $j++) { 
            echo "<td>";
            echo $arr[$i][$j];
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
<body>
    
</body>
</html>