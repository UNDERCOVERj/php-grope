<?php
    // $fileName = "./book.js";
    // $myFile = fopen($fileName, "r");
    // echo fread($myFile, filesize($fileName));
    // echo fgets($myFile);
    // fclose($myFile);

    // 用 fopen() 打开并不存在的文件，此函数会创建文件
    $fileName = "./book.txt"; 
    // 如果./book.txt已有数据，则会覆盖
    $myFile = fopen($fileName, "w");
    fwrite($myFile, "first line \n");
    fwrite($myFile, "second line \n");
    echo fread($myFile, filesize($fileName));
    fclose($myFile);
?>