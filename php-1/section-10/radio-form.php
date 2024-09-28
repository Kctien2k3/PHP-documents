<?php
// function show_array($data) {
//     if (is_array($data)) {
//         echo "<br>";
//         print_r($data);
//         echo "<br>";
//     }
// }
if (isset($_POST['btn_reg'])) {
    // show_array($_POST);

    $show_gender = array(
        'male' => 'Nam',
        'female' => 'Nữ',
    );
    if (empty($_POST['gender'])) {
        echo "please select a gender";
    } else {
        $gender = $_POST['gender'];
        echo $show_gender[$gender];
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lấy giá trị từ form radio</title>
</head>

<body>
    <h1>đăng ký</h1>
    <form action="" method="POST">
        <label>
            <input type="radio" name="gender" value="male" checked = "checked">
            Nam
        </label>
        <label>
            <input type="radio" name="gender" value="female">
            Nữ
        </label>
        <input type="submit" name="btn_reg" value="register">
    </form>

</body>

</html>