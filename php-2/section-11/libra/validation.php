<?php 
// => điều quang trọng là phải tạo hàm require 'libra/validation.php'; để kết nồi với hàm
// tạo hàm để check username 
function is_fullname($fullname) {
    $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
        if (!preg_match($pattern, $fullname, $matchs))
        return false;
        return true;
}
function is_password($password) {
    $pattern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
        if (!preg_match($pattern, $password, $matches)) 
           return false;    
           return true;

}
function form_error($label_feild) {
    global $error;
    if (!empty($error[$label_feild])) return "<p class='error'>{$error[$label_feild]}</p>";
}

function set_value($label_feild) {
    global $$label_feild;
    if (!empty($error[$$label_feild])) return $$label_feild;
}



?>