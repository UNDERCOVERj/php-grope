<?php
    session_start(); // 会在cookie中种下PHPSESSID
    if(isset($_SESSION["view"])) {
        $_SESSION["view"] += 1;
    } else {
        $_SESSION = 1;
    }
    unset($_SESSION['view']); // 删除
    session_destroy();
?>
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
        echo $_SESSION["view"];
    ?>
</body>
</html>