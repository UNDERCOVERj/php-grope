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
        $x = array("Boolean", "Array", "function", "object");
        sort($x); // 按首字母升序排序(小写)
        var_dump($x);
        echo "<br>";
        rsort($x);
        var_dump($x);

        // 对关联数组值进行升序排列
        $age = array("bob" => 10, "alice" => 20);
        asort($age);
        echo "<br>";
        var_dump($age);
        
        // 对关联数组key进行升序排列
        ksort($age);
        echo "<br>";
        var_dump($age);

        // 对关联数组值进行降序排列
        arsort($age);
        echo "<br>";
        var_dump($age);
    ?>
</body>
</html>