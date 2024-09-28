<?php
require 'db/connect.php';
if (isset($_POST['btn_login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `tbl_users` WHERE `username`= '".$username."' AND `password` = '".$password."'";

    $result = mysqli_query($conn, $sql);
    echo $sql; 
    if (mysqli_num_rows($result)>0){
        echo "bạn được phép đăng nhập";
    }
    echo "thông tin đăng nhập không hợp lệ!";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection</title>
</head>
<body>
    <h1>đăng nhập tài khoản</h1>
    <form action="" method="POST">
        <label for="username">username</label>
        <input type="text" name="username" id="username"><br><br>
        <label for="password">password</label>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" name="btn_login" value="đăng nhập">
    </form>
</body>
</html>