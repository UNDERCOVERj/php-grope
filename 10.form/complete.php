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
        $fname = $sex = "";
        $fname = $_GET["fname"];
        $sex = $_GET["sex"];
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
        name: <input type="text" name="fname" value="<?php echo $fname; ?>">
        男：<input type="radio" name="sex" value="female" <?php if (isset($sex) && $sex === "female") echo "checked"; ?>>
        女：<input type="radio" name="sex" value="male" <?php if (isset($sex) && $sex === "male") echo "checked"; ?>>
        <input type="submit" value="submit">
    </form>
</body>
</html>