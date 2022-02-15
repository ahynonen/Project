<?php
$dest="folder1/".basename($_FILES["userfile"]["name"]);

$ext=strtolower(pathinfo($_FILES["userfile"]["name"], PATHINFO_EXTENSION));

    if($_FILES["userfile"]["size"]>2097152){
        echo "Upload file is too large.";
    }

    if($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
        echo "$ext not allowed";
    }

    else {
        if(move_uploaded_file($_FILES["userfile"]["tmp_name"], $dest)){
            echo"The file has been successfully uploaded. <br>";
            echo "<a href='folder1/'> Click to see list of files </a><br>";
    } else {
        echo "Unable to upload file";
    }
    }

        
?>