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
        $x = 2;
        $y = null;
        var_dump(isset($y));

        var_dump(preg_match("/x(y)/", 'xyz', $match));
        var_dump($match);
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        name: <input type="text" name="fname" value="<?php echo $x ?>">
        email: <input type="email" name="femail">
        <input type="submit" value="submit">
    </form>
</body>
</html>