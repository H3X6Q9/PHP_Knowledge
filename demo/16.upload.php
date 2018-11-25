<?php
if($_FILES) {
    // print_r($_FILES);
    $file = $_FILES['imgfile'];
    move_uploaded_file($file['tmp_name'], './files/' . $file['name']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="imgfile">
        <input type="submit" value="上传">
    </form>
</body>
</html>
