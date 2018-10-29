<?php 
    include './layout.html';
?>
<body>
    <div>123</div>
    <?php
        include "./child.php";
        echo $color; // 能够打印导出的color
    
        // require 遇到无法找到的文件就退出了
        include "./notfound.php";
        echo "include";
        require "./notfound.php";
        echo "require";
    ?>
</body>
</html>