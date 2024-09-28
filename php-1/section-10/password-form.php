<!-- lấy dữ liệu thông quan phương pháp isset  -->
<?php 
function show_array($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
show_array($_POST);
// b1: kiểm tra submit của form
// b2: lấy dữ liệu 
if (isset($_POST['btn_login'])) {
    if (empty($_POST['username'])) {
        echo "không đc để trống tên đăng nhập! ";
    }else {
        $username = $_POST['username'];
        echo $username;
    }
    echo "<br>";
    if (empty($_POST['password'])) {
        echo "bạn chưa nhập mật khẩu! ";
    }else {
        $password = $_POST['password'];
        echo $password;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password box form</title>
</head>

<body>
    <form action="" method="POST">
        username: <input type="text" name="username" placeholder="username"><br><br>
        password: <input type="password" name="password"><br><br>
        <input type="submit" name="btn_login" value="login">
    </form>
</body>

</html>