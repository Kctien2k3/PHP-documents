<?php 
function get_header(){
    $path_header = "inc/header.php";
    if(file_exists($path_header)) {
    require $path_header;
    }else {
        echo "trang này không tồn tại!";
    }
}
function get_footer() {
    $path_footer = "inc/footer.php";
    if(file_exists($path_footer)) {
        require $path_footer;
    }else {
        echo "trang này không tồn tại!";
    }
}


?>