<?php
$file= "text.txt";
    $f = fopen($file,'a+');
    fwrite($f, "\n" . rand(1,15));
    fseek($f,0);
    echo fread($f,filesize($file));
    fclose($f);
?>