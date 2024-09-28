<?php
//================================================
// cấu trúc điều kiện if 
//================================================
# if 
// kiểm tra số chẵn
$a = 2;
if ( $a % 2 == 0) {
    $a = "{$a} là số chẵn";
}
echo $a;
echo "<br>";
# if else 
// kiểm tra tính chẵn lẽ
$b = 11;
if ( $b % 2 == 0) {
    echo "{$b} là số chẵn";
}else {
    echo "{$b} là số lẻ";
}
echo "<br>";

# if elseif elseif .....
// 1 2 3 4 5 6 7 8 9 10
$mark = 7;
if ($mark < 4) {
    echo "{$mark} là điểm F";
}elseif ($mark < 5.5) {
    echo "{$mark} là điểm D";
}elseif ($mark < 6.5) {
    echo "{$mark} là điểm C";
}elseif ($mark < 7.5) {
    echo "{$mark} là điểm B";
}elseif ($mark < 8.5) { 
    echo "{$mark} là điểm A";
}elseif ($mark <= 10) {
    echo "{$mark} là điểm S";
}
echo "<br>";


# cấu trúc điều kiện lồng nhau
$point = 6;
if ($point >= 0 && $point <=10) {
    if ($point < 4) {
        echo "{$point} là điểm F (mày đần hết thuốc chửa!)";
    }elseif ($point < 5.5) {
        echo "{$point} là điểm D (cút mẹ m đi!)";
    }elseif ($point < 6.5) {
        echo "{$point} là điểm C (đồ ngu đồ ăn hại!)";
    }elseif ($point < 7.5) {
        echo "{$point} là điểm B (cũng đc!)";
    }elseif ($point < 8.5) { 
        echo "{$point} là điểm A (good!)";
    }elseif ($point <= 10) {
        echo "{$point} là điểm S (thằng này biết chơi á!)";
    }
} else {
    echo "số liệu không hợp lệ. hãy nhập lại! ( lưu ý số liệu thuộc khoản từ 0 tới 10)";
}




?>