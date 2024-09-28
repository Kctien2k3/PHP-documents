<?php
function show_array($data){
    if (is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
if (isset($_POST['btn_order'])){
    show_array($_POST);
    if (empty($_POST['pay'])){
        echo "please enter a pay amount";
    }else {
        $pay = $_POST['pay'];
        echo $pay;
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lấy dữ liệu từ select form</title>
</head>
<body>
    <h1>đặt hàng</h1>
    <form action="" method="POST">
        <label>hình thức thành toán</label><br>
        <select name="pay">
            <option value="">--chọn--</option>
            <option value="cod" selected="selected" >thanh toán tại nhà</option>
            <option value="banking"> thanh toán bằng thẻ tín dụng</option>
        </select>
        <input type="submit" name="btn_order" value="đặt hàng">
    </form>

</body>
</html>