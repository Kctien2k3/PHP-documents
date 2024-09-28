<?php
//================================================
// thêm phần tử mới cho mảng trong php 
//================================================

# thêm phần tử trong mảng với key xác định
$info = array(
    'id' => 1,
    'fullname' => 'Kc Tiến',
    'email' => 'kctien2k3@gmail.com'
);

$info['tell'] = '0971380103';
echo "<pre>";
print_r($info);
echo "<pre>";

# thêm phần tử trong mảng với key mặc định
$number = array(2, 3, 5, 7);

$number[] = '11';
echo "<pre>";
print_r($number);
echo "<pre>";
?>