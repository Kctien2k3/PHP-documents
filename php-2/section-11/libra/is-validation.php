<?php 
require './validation.php';
if (isset($_POST['btn_info'])) {
    $error = array();
    // kiểm tra lỗi của fullname
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "your fullname is required!";
    }else {
        // phần kiểm tra số lượng ký tự cho phép
        if (!(strlen($_POST['fullname']) >= 6 && strlen($_POST['fullname'])<= 32)) {
            $error['fullname'] = "fullname require from 6 to 32 characters!";
        }else { // kiểm tra kiểu ký tự cho phép
        if (!is_fullname($_POST['fullname'])){ // cách thông báo lỗi thông qua hàm ở một trang khác
        $error['fullname'] = "full name chỉ cho phép sử dụng ký tự, chữ số, gạch dưới!";
        }else { // không có lỗi ký tự thì ta xuất ra 
        $fullname = $_POST['fullname'];
        echo $fullname;
        }
        }
        
    }
    // kiểm tra lỗi của gender
    if (empty($_POST['gender'])) {
        $error['gender'] = "your gender is required!";
    }else {
        $gender = $_POST['gender'];
        echo $gender;   
    }
    // kiểm trả lỗi của password
    if (empty($_POST['password'])) {// kiểm tra chỗ password có bị để trống không 
        $error['password'] = "your password is required!";
    }else // kiểm tra số lượng ký tự cho phép
    if (!is_password($_POST['password'])){// cách thông báo lỗi thông qua hàm ở một trang khác
        $error['password'] = "password cho phép sử dụng chữ cái, chữ số, ký tự đặc biệt, bắt đầu bằng chữ viết hoa";
    }else { // nếu không có lỗi ký tự thì xuất ra 
        $password = $_POST['password'];
        echo $password;
}

    // phần xuất lỗi
    if (empty($error)) {
        echo "{$fullname} - {$gender} - {$password}";
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
        <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname'); ?>"><br>   
        <?php //if(empty($fullname)) echo "<p class='error'>{$error['fullname']}</p>" ?>
        <!-- // cách báo ngắn gọn hơn: -->
        <?php echo form_error('fullname');?>

        <label for="password">your password:</label><br>
        <input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>"><br>   
        <?php echo form_error('password') ?>
        


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