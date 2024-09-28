<?php 
//================================================
// dữ liệu kiểu boolean 
//================================================


// trường hợp sử dụng if 
$a = 10;
if ($a % 2 == 0) { // true or false
    echo "{$a} : là số chẵn";
}
// trượng hợp sử dụng hàm
function checkEven($n) {
    if ($n % 2 == 0) { // true or false
        return true;
    }
    return false;
}
$check = checkEven(4);
?>