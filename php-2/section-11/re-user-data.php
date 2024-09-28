<?php
if (isset($_POST['btn_login'])) {
    $error = array();// tạo một mảng error rỗng đẻ chứa lỗi
    if (empty($_POST['gender'])) {// trường hợp gender rỗng
        $error['gender'] = "your gender is required!";
    }else {
        $gender = $_POST['gender'];
    }
    if (empty($_POST['fullname'])) {// trường hợp fullname rỗng
        $error['fullname'] = "your fullname is required!";
    }else {
        $fullname = $_POST['fullname'];
    }
    
   

    if (empty($error)) {// trường hợp mảng error rỗng tức là không có lỗi
        echo "{$gender}";
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
        <label for="fullname">your fullname</label><br>
        <input type="text" name="fullname" id="fullname" value="<?php if(!empty($fullname)) echo $fullname; ?>"><br>
        <p class="error"><?php if(empty($fullname)) echo $error['fullname'] ?></p><br>
        <select name="gender" id="">
            <option value="">---chọn---</option>
            <option <?php if(!empty($gender) && $gender == 'male') echo "selected = 'selected'"?> value="male">Male</option>
            <option <?php if (!empty($gender) && $gender == 'female') echo "selected = 'selected'" ?>value="female">Female</option>
        </select>
        <p class="error"><?php if(empty($gender)) echo $error['gender'] ?></p>
        <input type="submit" name="btn_login" value="login">
    </form>
</body>
</html>