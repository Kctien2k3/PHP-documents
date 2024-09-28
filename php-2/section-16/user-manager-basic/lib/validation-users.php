<?php
function check_login($username, $password) {
    global $list_users;
    foreach ($list_users as $user) {
        if ($username == $user['username'] && md5($password) == $user['password']) {
            return true;
        }
    }
    return false;
}

function is_login() {
    if(isset($_SESSION['is_login'])) {
         return true;
    }
    return false;
}

function user_login() {
    if(!empty($_SESSION['user_login'])) {
        return $_SESSION['user_login'];
    }
    return false;
}


/// trạo truy vấn info của user
function info_user($field = 'id') {
    global $list_users;
    if (isset($_SESSION['is_login'])) {
        foreach ($list_users as $user) {
            // print_r($user);
            if ($_SESSION['user_login'] == $user['username']){
                if (array_key_exists($field, $user)){
                    // print_r($user);
                    return $user[$field];
                }
            }
        }
    }
    return false;
}
?>
 