<?php
// =================================================================
// mảng đa chiều trong php
// =================================================================

# mảng đa chiều 
$list_user = array(
    1 => array(
        'id' => 1,
        'fullname' => 'Kc Tiến',
        'email' => 'kctien2k3@gmail.com'
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'Kiều Công Tiến',
        'email' => 'kctien2k3@gmail.com'
    )
);

echo "<pre>";
print_r($list_user);
echo "<pre>";

# thêm phần tử trong mảng đa chiều 
// cách 1: 
$list_user[3] = array(
    'id' => 3,
    'fullname' => 'ken kc',
    'email' => 'kctien2k3@gmail.com'
);
echo "<pre>";
print_r($list_user);
echo "<pre>";

// cách 2:
$list_user[3]['id'] = 3;
$list_user[3]['fullname'] = 'ken kc';
$list_user[3]['tel'] = '132359479789';

echo "<pre>";
print_r($list_user);
echo "<pre>";

# lấy phần tử trong mảng đa chiều 

echo "<pre>";
print_r($list_user[2]);
echo "<pre>";

echo $list_user[3]['fullname'];
?>