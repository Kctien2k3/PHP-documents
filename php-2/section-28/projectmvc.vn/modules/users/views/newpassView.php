
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newpass.php</title>
    <link rel="stylesheet" href="../projectmvc.vn/public/css/Reset.css">
    <link rel="stylesheet" href="../projectmvc.vn/public/css/login.css">
</head>
<body>
    <div id="wp-form-login">
        <h1>MẬT KHẨU MỚI!</h1>
        <form id="form_login" enctype="multipart/form-data" action="" method="POST">
            <input type="password" name="password" value="<?php echo set_value('password')?>" placeholder="password" id="password" autocomplete="false">
            <!-- //phần thông báo  --> <?php echo form_error('password')?>
            <input type="submit" name="btn-new-pass" value="SAVE" id="login-button">
            <!-- //phần thông báo  --> <?php echo form_error('account')?>
        </form>
        <a href="<?php echo base_url("?mod=users&action=lost_pass")?>" id="lost-pass">login</a>
        <a href="<?php echo base_url("?mod=users&action=reg")?>" id="lost-pass">|| sign up</a>
    </div>
</body>
</html>