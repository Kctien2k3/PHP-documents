<?php
//================================================
// cấu trúc mảng trong php
//================================================
# tạo mảng rỗng
$error = array();
$error['error'] = 'lỗi ko đc để trống tên đăng nhập!';

echo "<pre>";
print_r($error);
echo "<pre>";

# tạo mảng với key mạc định
$check_odd = array(1,3,5);

echo "<pre>";
print_r($check_odd);
echo "<pre>";

# tạo mảng với key xác định
$info = array(
    'id' => '1',
    'fullname' => 'Kc Tiến',
    'email' => 'kctien2k3@gmail.com'
);

echo "<pre>";
print_r($info);
echo "<pre>";
?>