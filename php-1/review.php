<!-- chuỗi bài tập ôn tập luyện tập lại cho phần php để tiếp tục học tập theo lộ trình. -->
 
bài tập số 3: begin 

<?php
// ôn tập lại phần bài tập về php 
// bài tập 3: xuất dữ liệu với php 
// bước 1: tạo 3 biến fullname, username, mail.
// bước 2: tạo lập cấu trúc html 
// bước 3: gắn cấu trúc php vào trong html để hoàn thành bài tập

// bài làm 
// bước 1: 
$fullname = "Kiều Công Tiến";
$username = "Kc Tien";
$mail = "kctien2k3@gmail.com";

?>
<!-- bước 2: tạo lập cấu trúc html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bài tập 3 cấu trúc php và cách sử dụng</title>
</head>
<body>
    <h1>thông tin cá nhân</h1>
    <p>tên đầy đủ là: <?php echo $fullname;?></p>
    <p>tên đăng nhập: <?php echo $username;?></p>
    <p>mail của bạn là: <?php echo $mail; ?></p>
</body>
</html>
<hr>






bài tập số 4: data in php 
<?php
$list_info = array(
    1 => array(
        'id' => 1234567889,
        'name' => 'Kiều Công Tiến',
        'age' => 19
    ),
    2 => array(
        'id' => 1234567,
        'name' => 'Phan Văn Cương',
        'age' => 35
    )

);
echo '<pre>';
print_r($list_info);
echo '<pre>';


// ktra số chẵn
function checkEven($n) {
    if($n % 2 <> 0) {
        echo "{$n} là số lẻ không chia hết cho 2!";
    }else {
        echo "{$n} là số chẵn và chia hết cho 2!";
    };
    return false;
};
$check = checkEven(5);

// bài tập thực hành 
#1. tạo danh sách thành viên
// các bước thực hiện
// bước 1: xác định nội dụng và tạo lập một hệ mảng lớn
// bước 2: tạo lập những hệ mảng nhỏ phục vụ cho nhập liệu một số thông tin của thành viên hoặc sản phẩm

$list_members = array(
    1 => array(
        'id' => 1,
        'name' => "Kiều Công Tiến",
        'mail' => 'Kctien2k3@gmail.com'
    ),
    2 => array(
        'id' => 2,
        'name' => "Phan Văn Cương",
        'age' => 36
    ),
    3 => array(
        'id' => 3,
        'name' => "some one I don't know! :))",
        'more' => 'we have some problems with this thing!'
    )
);
echo "<pre>";
print_r($list_members);
echo "<pre>";


#2. bài tập tạo danh sách sản phẩm
// các bước thực hiện
// bước 1: giống với câu 1 cũng tạo lập một hệ mảng lớn 
// bước 2: tạo những mảng nhỏ khác nhau nhằm đăng tải hoặc lưu giữ thông tin sản phẩm!

$list_pro = array(
    1 => array(
        'mã code' => 1459483,
        'tên sản phẩm' => "html"
    ),
    2 => array(
        'mã code' => 1465963,
        'tên sản phẩm' => "css"
    ),
    3 => array(
        'mã code' => 75883,
        'tên sản phẩm' => "javascript"
    ),
    4 => array(
        'mã code' => 87564583,
        'tên sản phẩm' => "php"
    ),
    5 => array(
        'mã code' => 79083,
        'tên sản phẩm' => "laravel"
    )
);
echo "<pre>";
print_r($list_pro);
echo "<pre>";



#3: hiển thị thông tin cá nhân được lưu ở dạng biến
 // các bước thực hiện
 // bước 1: phân tích đề và tạo các biến về thông tin các nhân 
 // bước 2: hoàn thành tạo lập cấu trúc html và gán thông tin các nhân vào trong cấu trúc html
// bài làm giống với bài làm bài tập số 3 
?>



------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
bài thực hành số 5: các phép toán trong php

<?php
$b = 2;
function checkOdd($b) {
    if ($b % 2 == 0 ) {
        return true;
    }
     return false;
};

if (!checkOdd(4)) {
    $b = ++$b;
    echo "đây là số lẻ!";
}else {
    $b = --$b;
    echo "đây là số chẵn!";
}



// cách ngắn gọn hơn
$c = 4;
if (($c >= 0) && ($c % 2 ==0)) {
    $c = $c++;
    echo "<br>";
echo $c;
}else {
    $c = --$c;
    echo "<br>";
    echo $c;
}


?>




------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
bài tập thực hành số 6: các loại hàm trong php 
<?php 
#1. tính tổng các số chẵn từ 1 đến n ( với n > 2)
// cách 1: dùng hàm for - if
$t = 0;
$n = 10; 

// for ($i = 0; $i <= $n; $i++) {
//     if ($i % 2 == 0) {
//         $t += $i;
//     }
// }
// echo $t;


// for ($i = 3; $i <= $n; $i += 3) {
//     if ($i % 3 == 0) {
//         $t += (1/$i);
//     }
// }
// echo $t;

for ($i = 1; $i <= $n; $i ++) {
    $t += ($i/($i + 1));
}
echo $t;


// bài 4: giải hệ phương trình 
$a = 2;
$b = 1;
$c = 1;
if ($a != 0) {
    echo "phương trình này là phương trình bặc 2! với a khác 0.";
    $delta = $b*$b - 4*$a*$c;
    if ($delta > 0) {
        $m = (-$b + sqrt($delta))/2*$a;
        $n = (-$b - sqrt($delta))/2*$a;
        echo "phương trình có 2 nghiệm là {$m} và {$n}";
    }elseif ($delta < 0) {
        echo "phương trình vô nhiệm!";
    }elseif ($delta == 0) { 
        $x = -$b/(2*$a);
        echo "phương trình có một nghiệm duy nhất là: {$x}" ;
    }
}else {
    echo "phương trình này không phải là phương trình bậc 2 bởi vì a = 0!";
}
?>




------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
bài tập số 7: 
<?php 
$list_a = array(
    'id' => '1254',
    'name' => "Kiều Công Tiến",
    'description' => "I'm a free guy, and i can do anything i want!"
);

echo "<pre>";
print_r($list_a);
echo "</pre>";
// thêm một phần tử vào mảng xác định
$list_a['phone'] = '0971380103';
echo "<pre>";
print_r($list_a);
echo "</pre>";

$list_x = array(1,2,3,4,5,6);

$list_x[]= '11';

echo "<pre>";
print_r($list_x);
echo "</pre>";

// lấy phần tử của mảng
echo "<pre>";
echo $list_a['name'];   
echo "</pre>";
echo "<pre>";
echo $list_x[3];
echo "</pre>";

// cập nhật phần tử cho mảng
$list_a['id'] = '56789';
echo "<pre>";
print_r($list_a);   
echo "</pre>";

// xóa phần tử trong mảng
unset($list_x[6]);
echo "<pre>";
print_r($list_x);   
echo "</pre>";



//duyệt mảng với foreach
$list_b = array(
    1 => array(
        'id' => 1,
        'name' => "Kiều Công Tiến",
        'more' => 'Kctien2k3@gmail.com'
    ),
    2 => array(
        'id' => 2,
        'name' => "Phan Văn Cương",
        'more' => 36
    ),
    3 => array(
        'id' => 3,
        'name' => "some one I don't know! :))",
        'more' => 'we have some problems with this thing!'
    )
);

foreach($list_b as $key) {
    echo $key['id']."<br>";
    echo $key['name']."<br>";
    echo $key['more']."<br>";
}

$list_y = array(2,3,5,6,8);

$t= 0;
foreach( $list_y as $number => $value ){
    echo "$number => $value.<br>";
    $t += $value;
}
echo "$t";  


?>
<?php 
$list_prime = array(2,4,6,7);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nhúng dữ liệu mảng lên html</title>
</head>
<body>
    <h1>danh sách số nguyên tố</h1>
    <table border="2">
        <thead>
            <tr>
                <td align="center" width="50">STT</td>
                <td align="center" width="200">Số Nguyên Tố</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $temp = 0;
            foreach ($list_prime as $item){
                $temp ++;
            ?>
            <tr>
                <td align="center"><?php echo $temp; ?></td>
                <td align="center"><?php echo $item; ?> </td>
            </tr>
            <tr>
                <td align="center"><?php echo $temp; ?></td>
                <td align="center"><?php echo $item; ?> </td>
            </tr>
            <tr>
                <td align="center"><?php echo $temp; ?></td>
                <td align="center"><?php echo $item; ?> </td>
            </tr>
            <tr>
                <td align="center"><?php echo $temp; ?></td>
                <td align="center"><?php echo $item; ?> </td>
            </tr>
            <?php
            };
            ?>
        </tbody>
    </table>
</body>
</html>

<?php 
$list_users = array(
    154326 => array(
        'id' => 65454,
        'name' => "Kiều Công Tiến",
        'mail' => "kctien2k3@gmail.com"
    ),
    2435 => array(
        'id' => 46354763,
        'name' => "Phan Văn Cương",
        'mail' => "pvcuong@gmail.com"
    ),
    36534 => array(
        'id' => 655346345,
        'name' => "nguyễn văn A",
        'mail' => "Anguyenvan@gmail.com"
    )
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dánh sách thành viên</title>
</head>
<body>
    <h1>dánh sách thành viên</h1>
    <table border="1">
        <thead>
            <tr>
                <td align="center" width= "100">STT</td>
                <td align="center" width= "100">ID</td>
                <td align="center" width= "200">HỌ VÀ TÊN</td>
                <td align="center" width= "200">MAIL</td>
            </tr>
        </thead>
        <tbody>
            <?php 
            $stt =0;
            foreach($list_users as $user) {
                $stt ++;
            ?>
            <tr>
                <td align="center"><?php echo $stt; ?></td>
                <td align="center"><?php echo $user['id'];?></td>
                <td align="center"><?php echo $user['name'];?></td>
                <td align="center"><?php echo $user['mail'];?></td>
            </tr>
            <?php 
            };
            ?>
        </tbody>
    </table>
</body>
</html>
