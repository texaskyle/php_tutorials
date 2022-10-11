<?php
// print_r($_FILES);
$fileName = $_FILES['file']['name'];
$tmpFile = $_FILES['file']['tmp_name'];
$error = $_FILES['file']['error'];
$file_full_path = $_FILES['file']['full_path'];
 echo $size = $_FILES['file']['size'];
?>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"><br>
    <input type="submit" name="uploadFile" value="Upload">
</form>