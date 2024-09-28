
<?php 
require 'lib/template.php';
// require 'inc/header.php';
get_header();
?>
<?php
// $page = $_GET['page'];
$page = !empty($_GET['page'])?$_GET['page']:'home';
// echo $page;
$path = "pages/{$page}.php";
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
get_footer();
?>
        