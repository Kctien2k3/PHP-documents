<?php
if(isset($_POST['btn_login'])) {
    $error = array();
    // tạo hàm check username 
    if (empty($_POST['username'])) {
        $error['username'] = "your username is empty!";
    }else {
        $pattern = '/^[A-Za-z0-9_\.]{6,32}$/';
        if (!preg_match($pattern, $_POST['username'])){
            $error['username'] = "tên đăng nhập không đúng định dạng!";
        }else {
            $username = $_POST['username'];
        }
    }
    // tạo hàm check password
    if (empty($_POST['password'])) {
        $error['password'] = "your password is empty!";
    }else {
        $pattern = '/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/';
        if (!preg_match($pattern, $_POST['password'])){
            $error['password'] = "mật khẩu không đúng định dạng!";
        }else {
            $password = $_POST['password'];
        }
    }


    // kết luận 
    if (empty($error)) {
        if (check_login($username, $password)) {
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $username;
            redirect("?page=home");
        }else {
            $error['account'] = "username or password is incorrect!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login.php</title>
    <link rel="stylesheet" href="../user-manager-basic/public/css/Reset.css">
    <link rel="stylesheet" href="../user-manager-basic/public/css/login.css">
</head>
<body>
    <div id="wp-form-login">
        <h1>Đăng Nhập</h1>
        <form id="form_login" enctype="multipart/form-data" action="" method="POST">
            <input type="text" name="username" placeholder="username" id="username">
            <!-- //phần thông báo  -->
            <?php 
            if(!empty($error['username'])) {
                ?>
            <p class="error"><?php echo $error['username'] ?></p>
            <?php
            }
            ?>
            <!-- ////////////////////// -->
            <input type="password" name="password" placeholder="password" id="password">
            <!-- //phần thông báo  -->
            <?php 
            if(!empty($error['password'])) {
                ?>
            <p class="error"><?php echo $error['password'] ?></p>
            <?php
            }
            ?>
            <!-- ////////////////////// -->
            <input type="submit" name="btn_login" value="login" id="login-button">
            <!-- //phần thông báo  -->
            <?php 
            if(!empty($error['account'])) {
                ?>
            <p class="error"><?php echo $error['account'] ?></p>
            <?php
            }
            ?>
            <!-- ////////////////////// -->
        </form>
        <a href="">forgot your password!</a>
    </div>
</body>
</html>