<?php 
session_start();
// thực hiện xóa cookie
setcookie('is_login', true, time() -3600);
setcookie('user_login', 'unitop', time() -3600);
// thực hiện đăng xuất login/xóa session
unset($_SESSION['is_login']);
unset($_SESSION['user_login']);

header("location: login.php")

?>