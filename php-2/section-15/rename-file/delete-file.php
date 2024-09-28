<?php
$file_url = 'uploads/learning PS.docx';
if (@unlink($file_url)) {
    echo "đã xóa file {$file_url} thành công!";
}else {
    echo "file {$file_url} không tồn tại trên hệ thống!";
}
?>