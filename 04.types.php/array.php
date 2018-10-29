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
        // var_dump() 会返回变量的数据类型和值
        $arr = array("a", "b", "c");
        echo $arr; // Array
        echo "<br>";
        echo var_dump($arr); 
        /* array(3) {
            [0]=>
            string(1) "a"
            [1]=>
            string(1) "b"
            [2]=>
            string(1) "c"
          }
          */
          
    ?>
</body>
</html>