<?php
########### tạo mảng dự liệu user 
// họ và tên -> fullname
// tên đăng nhập -> username
// mật khẩu -> password
// email -> email 
// id -> id

$list_users = array(
    1 => array(
        'id' => 149247589475,
        'fullname' => 'Nguyễn Văn A',
        'username' => 'Anguyen',
        'password' => md5('Anguyen@123'),
        'email' => 'Anguyen@gmail.com'
    ),
    2 => array(
        'id' => 2432543645765,
        'fullname' => 'Nguyễn Văn B',
        'username' => 'Bnguyen',
        'password' => md5('Bnguyen@123'),
        'email' => 'Bnguyen@gmail.com'
    ),
    3 => array(
        'id' => 3764575757645,
        'fullname' => 'Nguyễn Văn C',
        'username' => 'Cnguyen',
        'password' => md5('Cnguyen@123'),
        'email' => 'Cnguyen@gmail.com'
    ),
);
?>