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
        /*

            整数必须有至少一个数字（0-9）
            整数不能包含逗号或空格
            整数不能有小数点
            整数正负均可
            可以用三种格式规定整数：十进制、十六进制（前缀是 0x）或八进制（前缀是 0）

        */
        $num = 123;
        $num1 = 0x12;
        $num3 = 012;
        echo $num;
        echo "<br>";
        echo $num1;
        echo "<br>";
        echo $num3;
        echo "<br>";
        echo var_dump($num3);
        echo var_dump(-10);
        echo var_dump($num1);
    ?>
</body>
</html>