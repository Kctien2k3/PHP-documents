<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="../projectmvc.vn/public/css/Reset.css">
    <link rel="stylesheet" href="../projectmvc.vn/public/css/login.css">
    <link rel="stylesheet" href="">
</head>
<body>
    <div id="wp-form-login">
        <h1 class="page-title">ĐĂNG KÝ TÀI KHOẢN</h1>
        <form id="form_login" enctype="multipart/form-data" action="" method="POST">
            <input type="text" name="fullname" value="<?php echo set_value('fullname')?>" placeholder="fullname" id="fullname">
            <!-- //phần thông báo  --><?php echo form_error('fullname'); ?>
            <input type="text" name="email" value="<?php // echo set_value('email')?>" placeholder="@gmail.com" id="email">
            <!-- //phần thông báo  --><?php echo form_error('email'); ?>
            <input type="text" name="username" value="<?php echo set_value('fullname')?>" placeholder="username" id="username">
            <!-- //phần thông báo  --><?php echo form_error('fullname'); ?>
            <input type="password" name="password" placeholder="password" id="password">
            <!-- //phần thông báo  --><?php echo form_error('password'); ?>
            <input type="submit" name="btn_reg" value="Sign up" id="login-button">
            <!-- //phần thông báo  --><?php echo form_error('account'); ?>
        </form>
        <a href="<?php echo base_url("?mod=users&action=login"); ?>" id="lost-pass">Đăng Nhập</a>
    </div>
</body>
</html>