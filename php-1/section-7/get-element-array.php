<?php
//================================================
// lấy phần tử mới cho mảng trong php 
//================================================
# lấy phần tử trong mảng với key mặc định
$number = array(2, 3, 5, 7,11);

echo "<pre>";
print_r($number);
echo "<pre>";

echo $number[4];

# lấy phần tử trong mảng với key xác định
$info = array(
    'id' => '1',
    'fullname' => 'Kc Tiến',
    'email' => 'kctien2k3@gmail.com'
);

$info['tell'] = '0971380103';
echo "<pre>";
print_r($info);
echo "<pre>";
echo $info['fullname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lấy phần tử trong mảng</title>
</head>
<body>
    <p>họ & tên là: <strong><?php echo $info['fullname']; ?></strong></p>
    <p>id là: <strong><?php echo $info['id']; ?></strong></p>
    <p>số nguyên tố thứ 3 là: <strong><?php echo $number[3]; ?></strong></p>
</body>
</html>