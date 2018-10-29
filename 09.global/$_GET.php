<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- 可以收集URL中发送的数据 -->
    <!-- 也可以用于表单 -->
    <a href="./res.php?obj=23&name=panda">跳转</a>
    <!-- PHP_SELF返回执行脚本的文件名 -->
    <!-- <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <input type="text" name="fname">
        <input type="submit" value="submit">
        <?php
            echo json_encode($_GET)
        ?>
    </form> -->
    <form action="res.php">
        <input type="text" name="fname">
        <input type="submit" value="submit">
        <?php
            echo json_encode($_GET)
        ?>
    </form>
</body>
</html>