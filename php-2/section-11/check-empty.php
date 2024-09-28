<?php
if (isset($_POST['btn_login'])) {
    $error = array();// tạo một mảng error rỗng đẻ chứa lỗi
    if (empty($_POST['username'])) {// trường hợp username rỗng
        $error['username'] = "your username is required!";
    }else {
        $username = $_POST['username'];
    }
    if (empty($_POST['password'])) {//trường hợp password rỗng
        $error['password'] = "your password is required!";
    }else {
        $password = $_POST['password'];
    }

    if (empty($error)) {// trường hợp mảng error rỗng tức là không có lỗi
        echo "{$username} - {$password}";
    }else {// có lỗi thì sẽ xuất ra lỗi
        echo "<pre>";
        print_r($error);
        echo "</pre>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check empty data</title>
</head>
<body>
    <style>
        .error {
            color: red;
        }
    </style>
    <h1>login</h1>
    <form action="" method="POST">
        <label for="username">your username:</label><br>
        <input type="text" name="username" id="username"><br>
        <!-- xuất ra cảnh báo rổng form -->
        <p class="error"><?php if (!empty($error['username'])) echo $error['username']; ?></p><br> 
        <label for="password">your password:</label><br>
        <input type="password" name="password" id="password"><br>
        <!-- xuất ra cảnh báo rổng form -->
        <p class="error"><?php if(!empty($error['password'])) echo $error['password']; ?></p><br>
        <input type="submit" name="btn_login" value="login">
    </form>
</body>
</html>