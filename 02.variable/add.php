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

        // 变量以 $ 符号开头，其后是变量的名称
        // 变量名称必须以字母或下划线开头
        // 变量名称不能以数字开头
        // 变量名称只能包含字母数字字符和下划线（A-z、0-9 以及 _）
        // 变量名称对大小写敏感（$y 与 $Y 是两个不同的变量）
        $x = 1;
        $y = 2;
        echo $x + $y + "3";
        // 作用域
        // 函数之外声明的变量拥有 Global 作用域，只能在函数以外进行访问。
        // 函数内部声明的变量拥有 LOCAL 作用域，只能在函数内部进行访问。
        function getX() {
            global $z; // 只声明
            $z = 3; // global 关键词用于访问函数内的全局变量。
            echo "<br/>";
            echo $GLOBALS['x'] + $GLOBALS['y'] + 2; // $GLOBALS存储全局变量
            echo "<br/>";
            echo $x;
            echo "<br/>";
            echo $z;
        }
        echo "<br/>";
        echo $z;
        echo $y;
        echo "<br/>";
        echo $z;
        echo "<br/>";
        getX();
        echo "<br/>";
    ?>
</body>
</html>