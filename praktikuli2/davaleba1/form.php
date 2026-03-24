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