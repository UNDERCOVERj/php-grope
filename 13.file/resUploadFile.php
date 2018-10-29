<?php
    // echo(json_encode($_FILES["uploadFile"]));
    if ($_FILES["uploadFile"]["error"] > 0) {
        echo "error: ".$_FILES["uploadFile"]["error"];
    } else {
        echo "Upload: " . $_FILES["uploadFile"]["name"] . "<br />";
        echo "Type: " . $_FILES["uploadFile"]["type"] . "<br />";
        echo "Size: " . ($_FILES["uploadFile"]["size"] / 1024) . " Kb<br />";
        echo "Stored in: " . $_FILES["uploadFile"]["tmp_name"];
        var_dump(move_uploaded_file($_FILES["uploadFile"]["tmp_name"], "upload/".$_FILES["uploadFile"]["name"]));
    }
?>