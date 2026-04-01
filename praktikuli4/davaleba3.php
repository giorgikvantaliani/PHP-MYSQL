<?php
    function NewFile(){
        $userdata = "files/data.txt";
        if(file_exists($userdata)){
            echo "arsebobs";
        } else {
            $file = fopen("files/data.txt", "w");
            fwrite($file, "created new file");

            $file = fopen($userdata, "r");
            $re = fread($file, filesize("files/data.txt"));

            echo $re;
        }
    NewFile();
    }
?>