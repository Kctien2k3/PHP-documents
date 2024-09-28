<?php 
////// khai báo data
require 'data/pages.php';
require 'data/products.php';
////// khai bái hàm 
require 'lib/template.php';
require 'lib/data.php';
require 'lib/pages.php';
require 'lib/products.php';

?>
<?php
////// tạo 2 biến để tạo đường dẫn
// $mod = $_GET['mod'];
// $act = $_GET['act'];
////// tạo đường dẫn cho 2 biến trên 
$mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
$act = !empty($_GET['act']) ? $_GET['act'] : 'main';
///////// tạo đường path 
$path = "modules/{$mod}/{$act}.php";
/////// kiểm tra đường dẫn 
if (file_exists($path)) {
    require $path;
}else {
    require "inc/404.php";
} 
?>
