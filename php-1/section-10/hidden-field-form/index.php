<?php
// tạo hàm kiểm tra array 
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
// show_array($_SERVER);   
// kiểm tra submit form 
if (isset($_POST['btn_login'])) {

    $info_user = array(
        'username' => 'admin',
        'password' => 'admin123',
    );

    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "please enter your username!";
        echo $error['username'];
    } else {
        $username = $_POST['username'];
        echo $username;
    }
    echo "<br>";
    if (empty($_POST['password'])) {
        $error['password'] = "please enter your passwords!";
        echo $error['password'];
    } else {
        $password = $_POST['password'];
        echo $password;
    }
    echo "<br>";
    // b1: kiểm tra dữ liệu
    // b2: gán dữ liệu
    // b3: kiểm tra login
    // b4: xử lý login
    // --- chuyển hướng tới cart.php
    // --- thông báo lỗi đăng nhập

    if (empty($error)) { // nếu cái $error mà rỗng tức là dữ liệu đã được nhập !
        if (($username == $info_user['username']) && ($password == $info_user['password'])) {
            $redirect_to = $_POST['redirect_to'];
            // echo $redirect_to;
            header("location:{$redirect_to}"); // đường dẫn tới một trang khác!
        }else {
            $error['login'] = "your username and password is incorrect!";
            // echo $error['login'];
        }
    } 
    // phần này rất quang trọng nến không có cảnh báo lỗi sẽ không xuất hiện
    if (!empty($error['login'])) {
        show_array($error); 
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nhận dữ liệu từ hidden field</title>
</head>

<body>
    <h1>ĐĂNG NHẬP!</h1>
    <!-- nếu muốn thực hiện xuất sang một trang khác bạn có thể điền tên file vào chỗ form action= "login.php" -->
    <form action="" method="POST">
        username: <input type="text" name="username"><br><br>
        password: <input type="password" name="password"><br><br>
        <input type="hidden" name="redirect_to" value="cart.php">
        <input type="submit" name="btn_login" value="login">
    </form>
</body>

</html>