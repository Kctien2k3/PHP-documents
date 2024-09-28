<?php 
if (isset($_POST['btn_info'])) {
    $error = array();
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "your fullname is required!";
    }else {
        if (!(strlen($_POST['fullname']) >= 6 && strlen($_POST['fullname'])<= 32)) {
            $error['fullname'] = "fullname require from 6 to 32 characters!";
        }else {
            $pattern = "/^[A-Za-z0-9_\.]{6,32}$/";
        if (!preg_match($pattern, $_POST['fullname'], $matchs))
        $error['fullname'] = "full name chỉ cho phép sử dụng ký tự, chữ số, gạch dưới!";
        else {
        $fullname = $_POST['fullname'];
        echo $fullname;
        }
        }
        
    }
    if (empty($_POST['gender'])) {
        $error['gender'] = "your gender is required!";
    }else {
        $gender = $_POST['gender'];
        echo $gender;   
    }
    if (empty($error)) {
        echo "{$fullname} - {$gender}";
    }else {
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
    <title>check username</title>
</head>
<body>
    <style>
        .error {
            color: red;
        }
    </style>
    <h1>infomation!</h1>
    <form action="" method="POST">
        <label for="fullname">your fullname:</label><br>
        <input type="text" name="fullname" id="fullname" value="<?php if (!empty($fullname)) echo $fullname; ?>"><br>   
        <p class="error"><?php if(empty($fullname)) echo $error['fullname'] ?></p><br> 
        <label>
        <input <?php if(!empty($gender) && $gender == 'male') echo "checked = 'checked'" ?>  type="radio" name="gender" value="male">
        male
        </label><br>
        <label>
        <input <?php if(!empty($gender) && $gender == 'female') echo "checked = 'checked'"?> type="radio" name="gender" value="female">
        female
        </label><br>
        <p class="error"><?php if(empty($gender)) echo $error['gender'] ?></p>
        <input type="submit" name="btn_info" value="info">
    </form>
</body>
</html>