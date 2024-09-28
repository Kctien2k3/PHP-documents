<?php
//================================================
// cấu trúc for loop trong php 
//================================================

# tính tổng các số chẵn tử 0 tới 10 bằng cấu trúc for-loop
$t = 0;
for ( $i = 0; $i <= 10; $i++ ) {
    if ($i % 2 == 0){
        $t += $i;
        echo $i . "<br>";
        // echo $t . "<br>";
    }
}
echo "kết quả là {$t}";
?>