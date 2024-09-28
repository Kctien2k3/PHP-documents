<?php 
if (isset($_POST['btn_reg'])){
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "your username is required!";
    }else {
        $username = $_POST['username'];
    }
    if (empty($_POST['password'])) {
        $error['password'] = "your password is required!";
    }else {
        $password = $_POST['password'];
    }

    if (empty($error)) {
        $data = array(
            'username' => 'admin',
            'password' => 'admin123'
        );
        if (($username == $data['username']) && ($password == $data['password'])) {
            header("location: index.php");
    }else {
        $error['login'] = "your username and password are incorrect!";
        echo $error['login'];
    }
    }else {
    print_r($error);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>redirect-file</title>
</head>
<body>
    <style>
        .error {
            color: red;
            font-style: italic;
        }
        label {
            display: block;
            /* margin-top: 15px; */
        }
        input[type="text"], input[type="password"] {
            padding: 5px 10px;
            border: 1px solid #c3bbbb;
        }
        #btn_reg {
            /* margin-top: 5px; */
            padding: 5px 20px;
            border: none;
            background: #000000;
            color: #fff;
            display: block;
            cursor: pointer;
        }
    </style>
    <h1>Đăng Ký Tài Khoản!</h1>
    <form action="" method="POST">
        <label for="username">Your Username:</label><br>
        <input type="text" name="username" id="username" value="<?php if(!empty($username)) echo $username?>"><br>  
        <?php if(empty($username)) echo "<p class='error'> {$error['username']} </p>";?>
<br>
        <label for="Password">Your Password:</label><br>
        <input type="password" name="password" id="password"><br>
        <?php if(empty($password)) echo "<p class='error'> {$error['password']} </p>"; ?>
<br>
        <input type="submit" name="btn_reg" value="register" id="btn_reg"><br>
        <?php if(!empty($error)) echo "<p class='error'> {$error['login']}</p>";?>
    </form>
</body>
</html>