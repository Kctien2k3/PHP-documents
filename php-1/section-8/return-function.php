<?php
// hàm trả về trong nội bộ hàm
function show_array($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

// function sum($a, $b) {
//     $t = $a + $b;
//     echo "<pre>";
//     echo $t;
//     echo "</pre>";
// };
// sum(5,6);


# hàm trả về dữ liệu thông qua return 
function sum($a, $b) {
    $t = $a + $b;
    return $t;
}

$t = sum(4,76);
echo $t;

?>