<?php 
// xử lý logout 
unset($_SESSION['is_login']);
unset($_SESSION['user_login']);
// chuyển hướng tới trang login
redirect("?page=login");
?>