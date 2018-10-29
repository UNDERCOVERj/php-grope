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
        // 非$开头 _或者a-zA-Z开头
        define("test", "hello", true); // true标识大小写不敏感
        echo test;
        echo TEST;
    ?>
</body>
</html>