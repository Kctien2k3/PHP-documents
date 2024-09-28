<!-- lấy dữ liệu bằng phương pháp REQUEST_METHOD  -->
<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
// show_array($_SERVER);
// print_r($_POST);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "{$username} - {$password}";
}
?>
<br>

<!-- lấy dữ liệu theo phương pháp ISSET -->
<?php
// b1: kiểm tra submit form 
// b2: lấy dữ liệu form 
if (isset($_POST['btn_login'])) {
    if (empty($_POST['username'])) {
        echo "không được đển trống dữ liệu đăng nhập!";
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo "{$username} - {$password}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>textbox form</title>
</head>

<body>
    <form action="" method="POST">
        username: <input type="text" name="username" placeholder="username"><br><br>
        password: <input type="password" name="password"><br><br>
        <input type="submit" name="btn_login" value="login">
    </form>
</body>

</html>