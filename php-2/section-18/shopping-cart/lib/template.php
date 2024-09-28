<?php 
function get_header($version = ''){
    if (!empty($version)){
        $path_header = "inc/header-{$version}.php";
    }else {
        $path_header = "inc/header.php";
    }
    if(file_exists($path_header)) {
    require $path_header;
    }else {
        echo "trang này không tồn tại!";
    }
}
function get_footer() {
    $path_footer = "inc/footer.php";
    if (file_exists($path_footer)) {
    require $path_footer;
    }else {
        echo "trang này không tồn tại!";
    }
}
function get_sidebar() {
    $path_sidebar = "inc/sidebar.php";
    if(file_exists($path_sidebar)) {
        require $path_sidebar;
    }else { 
        echo "trang này không tồn tại!";
    }
}

?>