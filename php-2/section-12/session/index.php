<?php 
session_start();
echo "trang chủ"."<br>";
if (!isset($_SESSION['is_login'])){
    header("location: login.php");
}else {
    echo $_SESSION['user_login']; 
}

?>
<br> 
<a href="logout.php">đăng xuất!</a>