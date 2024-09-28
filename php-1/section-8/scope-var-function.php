<?php

$a = 5;
$b = 7;
function sum() {
    global $a,$b;
    return $a + $b;
}

echo sum(); 



$c = 6;
$d = 8;
function tong() {
    return $GLOBALS['c'] + $GLOBALS['d'];
}
echo "<br>";
echo tong();
echo "<br>";

?>