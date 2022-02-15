<?php

#1

if (file_exists("helloworld.txt")) echo "File exists";
else echo "File does not exist";

$file = fopen("helloworld.txt", "r+");

$txt = "Team 5, Anika Hynönen, Wafa Faquir, Mehdi Naciri";
fwrite($file,$txt);
fread($file, filesize("helloworld.txt"));
fclose($file);
?>


#2
<html>
<head><title>Upload your file</title></head>
<body>
    <form method="post" action = "upload.php" enctype="multipart/form-data">
    Select file to upload: <input type="file" name="userfile"><br>
<input type="Submit" value="Upload file" name="submit">
</form>
</body>
</html>