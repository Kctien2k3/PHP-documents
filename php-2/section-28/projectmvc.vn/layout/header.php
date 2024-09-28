<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>hệ thống điều hướng cơ bản!</title>
        <!-- ///////////// khai báo phần base url cho link thân thiện -->
        <!-- <base href="http://localhost/UNITOP.VN/BACK-END/PHP/LESSON/php-2/section-27/projectmvc.vn/"> -->
        <base href="<?php echo base_url(); ?>">
        <!-- ////////// phần khai báo link css  -->
        <link rel="stylesheet" href="../projectmvc.vn/public/css/Reset.css">
        <link rel="stylesheet" href="../projectmvc.vn/public/css/style.css">
        <!-- phần khai báo script -->
        <script src="public/js/jquery-3.7.0.min.js" type="text/javascript"></script>
        <script src="public/js/app.js" type="text/javascript"></script>
        
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <a href="" id="logo">KC HOME</a>
                <?php if(is_login()) {?>
                    <div id="user-login">
                        <p>Xin chào <strong><?php echo $_SESSION['user_login']?></strong> (<a href="?mod=users&action=login">Logout</a>)</p>
                    </div>
                <?php }?>
                <ul id="main-menu">
                    <li><a href="?">HOME</a></li>
                    <!-- <li><a href="?mod=page&controller=index&action=detail&id=1">GIỚI THIỆU</a></li> -->
                    <li><a href="gioi-thieu-1.html">GIỚI THIỆU</a></li>
                    <li><a href="?mod=users&controller=index">THÀNH VIÊN</a></li>
                    <li><a href="?mod=order&controller=index">ORDER</a></li>
                    <li><a href="?mod=users&action=login">LOGIN</a></li>
                    <li><a href="?mod=users&action=reg">SIGN UP</a></li>
                    <li><a href="?mod=users&action=reset">RESET - PASSWORD</a></li>

                </ul>
            </div>
            <!-- end header  -->