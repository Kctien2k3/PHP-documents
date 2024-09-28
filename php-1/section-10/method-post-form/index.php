<?php 
// tạo hàm kiểm tra array 
function show_array($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
// show_array($_SERVER);   
// kiểm tra submit form 
if ($_SERVER['REQUEST_METHOD'] == 'POST' ){

    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "{$username} - {$password}";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- nếu muốn thực hiện xuất sang một trang khác bạn có thể điền tên file vào chỗ form action= "login.php" -->
<form action="" method="POST">
        Name: <input type="text" name="username"><br><br>
        password: <input type="password" name="password"><br><br>
        <input type="submit" name="btn_login" value="login">
    </form>
</body>
</html>