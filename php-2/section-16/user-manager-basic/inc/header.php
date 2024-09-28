<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>hệ thống điều hướng cơ bản!</title>
        <link rel="stylesheet" href="../user-manager-basic/public/css/Reset.css">
        <link rel="stylesheet" href="../user-manager-basic/public/css/style.css">
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <a href="" id="logo">KC Home</a>
                <div id="user-login">
                    <?php echo info_user('id') ?>
                    <p>Xin chào <strong><?php if(is_login()) echo info_user('fullname'); ?></strong>(<a href="?page=logout">Logout</a>)</p>
                </div>
                <ul id="main-menu">
                    <li><a href="?page=home">HOME</a></li>
                    <li><a href="?page=about">ABOUT</a></li>
                    <li><a href="?page=product">PRODUCT</a></li>
                    <li><a href="?page=news">NEWS</a></li>
                    <li><a href="?page=contact">CONTACT</a></li>
                    <li><a href="?page=login">LOGIN</a></li>
                </ul>
            </div>
            <!-- end header  -->