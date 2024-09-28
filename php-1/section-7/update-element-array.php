<?php
//================================================
// cập nhật phần tử cho mảng 
//================================================

$info = array(
    'id' => '1',
    'fullname' => 'Kc Tiến',
    'email' => 'kctien2k3@gmail.com'
);

echo "<pre>";
print_r($info);
echo "<pre>";

$info['fullname'] = 'Kiều Công Tiến';

echo "<pre>";
print_r($info);
echo "<pre>";
?>