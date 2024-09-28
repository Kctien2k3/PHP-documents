<?php 
function get_header() {
    $path_header = "inc/header.php";
    if (file_exists($path_header)) {
        require $path_header;
    }else {
        require "inc/404.php";
    }
}
function get_footer() {
    $path_footer = "inc/footer.php";
    if (file_exists($path_footer)) {
        require $path_footer;
    }else  {
        require "inc/404.php";
    }
}
function get_sidebar() {
    $path_sidebar = "inc/sidebar.php";
    if (file_exists($path_sidebar)) {
        require $path_sidebar;
    }else {
        require "inc/404.php";
    }
}
?>