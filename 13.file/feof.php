<?php
    $filename = "./book.js";
    $myFile = fopen($filename, "r");
    while (!feof($myFile)) {
        echo fgets($myFile)."<br>"; // 读取单行 fgetsc获取单个字符
    }
    fclose($myFile);
?>