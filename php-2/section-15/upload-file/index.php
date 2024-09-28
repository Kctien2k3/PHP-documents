<?php
require 'lib/data.php';
// kiểm tra đã submit chưa 
if (isset($_POST['upload_file'])) {
    show_array($_FILES);
    // thư mục chưa file upload
    $upload_dir = 'uploads/';
    // đường dẫn của file sau khi upload
    $upload_file = $upload_dir.$_FILES['file']['name'];
    
    // hàm thông báo 
    if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
        echo "upload file successfully !"."<br>";
        echo "<a href='$upload_file'>Download: {$_FILES['file']['name']} </a>";
    }else {
        echo "upload file failed!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload file on server</title>
</head>
<body>
    <h1>upload file!</h1>
    <!-- nếu muốn link tới một file khác thì có thể sử dụng action="upload.php" -->
    <form enctype="multipart/form-data" method="POST" >
        <input type="file" name="file"><br><br>
        <input type="submit" name="upload_file" value="upload file">
    </form>
</body>
</html>