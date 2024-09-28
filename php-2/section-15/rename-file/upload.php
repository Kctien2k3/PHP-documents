<?php
require 'lib/data.php';
// nếu đưa file vào index thì phải tạo hàm kiểm tra submit với isset
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

?>