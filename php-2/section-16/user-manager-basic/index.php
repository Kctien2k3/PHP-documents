
<?php 
// khai báo hàm session và hàm ob_start cho header[location]
session_start();
ob_start();
// khai báo data
require 'lib/data.php';
// khai báo hàm 
require 'lib/url.php';
require 'data/users.php';
require 'lib/validation-users.php';
require 'lib/template.php';
// require 'inc/header.php';
// get_header();
?>  
<?php
// $page = $_GET['page'];
$page = !empty($_GET['page'])?$_GET['page']:'home';
// echo $page;
$path = "pages/{$page}.php";

//////////////////// kiểm tra login //
if (!is_login() && $page != 'login') {
    redirect("?page=login");
}




// echo $path;

if (file_exists($path)) {
    require $path;
}else {
    // echo "không tồn tại trang này!";
    require 'inc/404.php';
}
?>
            
<?php 
// require 'inc/footer.php';
// get_footer();
?>
        