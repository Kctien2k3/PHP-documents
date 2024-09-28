
<?php 
require 'db/config.php';
require 'db/database.php';


require 'db/connect.php';
require 'lib/template.php';
require 'lib/data.php';
require 'lib/url.php';
require 'lib/users.php';
// require 'inc/header.php';
// get_header();
?>
<?php
////// liên kết với sql thông qua hàm 
db_connect($config);


// $page = $_GET['page'];
$mod = !empty($_GET['mod'])?$_GET['mod']:'home';
$act = !empty($_GET['act'])?$_GET['act']:'main';
// echo $page;
$path = "modules/{$mod}/{$act}.php";
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
        