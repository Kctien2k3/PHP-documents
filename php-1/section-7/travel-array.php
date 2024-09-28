<?php
// =================================================================
// duyệt mảng trong php 
// =================================================================

# duyệt mảng 1 chiểu
$info = array(
    'id' => '1',
    'fullname' => 'Kc Tiến',
    'email' => 'kctien2k3@gmail.com'
);

echo "<pre>";
print_r($info);
echo "<pre>";

foreach ( $info as $item) {
    echo "$item.<br>";
}

# duyệt mảng đa chiều 
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

foreach ($list_user as $value) {
    echo $value['id']."<br>";
    echo $value['fullname']."<br>";
    echo $value['email']."<br>";
    "<br>==========================</br>";
}
?>