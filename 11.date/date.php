<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        echo date("Y/m/d"); // Y 年 m 月 d 日
        echo "<br>"; 
        echo date("l"); // 星期几
        echo "<br>";
        echo date("Y");

        // h - 带有首位零的 12 小时小时格式
        // i - 带有首位零的分钟
        // s - 带有首位零的秒（00 -59）
        // a - 小写的午前和午后（am 或 pm）
    
        echo "<br>";
        echo date("h");
        echo date("i");
        echo "<br>";
        // 创建日期：

        // mktime()
        $d = mktime(14, 3, 32, 11, 12, 2017);
        echo date("Y-m-d h:i:sa", $d);
        echo "<br>";
        echo $d;
    ?>
</body>
</html>