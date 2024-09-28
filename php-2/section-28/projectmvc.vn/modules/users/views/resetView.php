<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login.php</title>
    <link rel="stylesheet" href="../projectmvc.vn/public/css/Reset.css">
    <link rel="stylesheet" href="../projectmvc.vn/public/css/login.css">
</head>
<body>
    <div id="wp-form-login">
        <h1>KHÔI PHỤC MẬT KHẨU</h1>
        <form id="form_login" enctype="multipart/form-data" action="" method="POST">
            <input type="text" name="email" value="<?php echo set_value('email')?>" placeholder="gmail.com" id="email">
            <!-- //phần thông báo  --> <?php echo form_error('email')?>
            <input type="submit" name="btn_reset" id="login-button" value="GỬI YÊU CẦU!">
            <!-- //phần thông báo  --> <?php echo form_error('account')?>

        </form>
        <a href="<?php echo base_url("?mod=users&action=login")?>" id="lost-pass">login</a>
        <a href="<?php echo base_url("?mod=users&action=reg")?>" id="lost-pass">|| sign up</a>
    </div>
</body>
</html>