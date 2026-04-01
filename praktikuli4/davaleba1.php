<?php
    function cwrfile(){
        $filename = "files/text.txt";

        $file = fopen($filename, "w");
        Fwrite($file, "hello world");

        $file = fopen($filename, "r");
        $re = fread($file, filesize($filename));

        echo $re;
    }
    cwrfile();
?>