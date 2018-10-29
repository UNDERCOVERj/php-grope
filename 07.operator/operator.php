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
        // 连接字符串

        $x = "x";
        $y = "y";

        echo $x . "_superstar_" . $y;

        // 整除
        var_dump(intdiv(10, 3));

        // isset 检测变量是否已设置并且非 NULL
        echo isset($z) ? "yes" : "no";

        // 数组合并

        $arr = array("x" => 1, "y" => 2);
        $arr2 = array("z" => 3);
        var_dump($arr + $arr2);
        if (false) {
            echo("true");
        } else {
            echo("false");
        }
    ?>
</body>
</html>