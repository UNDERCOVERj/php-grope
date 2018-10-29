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
        $arr = array("x"=>1, "y" => "z");
        // 遍历
        foreach ($arr as $key => $val) {
            echo $key."=>".$val."<br>";
        }

        foreach ($arr as $value) { // 只有值
            echo $value."<br>";
        }
    ?>
</body>
</html>