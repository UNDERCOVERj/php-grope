<?php
    $to = "1976744910@qq.com";
    $subject = "卢婷你好";
    $message = "我是俊杰，over";
    $from = "someonelse@example.com";
    $headers = "From: $from";
    mail($to,$subject,$message,$headers);
    echo "Mail Sent.";
?>