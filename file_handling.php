<?php

$file = 'hi.txt';




if(file_exists($file)){
    // echo readfile($file);
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle); 

    echo $contents;
}else{
    $handle = fopen($file, 'w');
    $contents = 'Carl'. PHP_EOL . 'CJ';
    fwrite($handle, $contents);
    fclose($handle); 
}