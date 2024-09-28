<?php
// =================================================================
// phép toán logic trong php 
// =================================================================

$a = 10;
$b = 3;

echo "a = {$a} <br> b = {$b}";
echo "<br>--------------------------------<br>";

if ($a != $b or $a < $b) {
    echo "a khác b or a lớn hơn b <br>";
}
if ($a != $b && $a > $b) {
    echo "a khác b và a lớn hơn b <br>";
}

function check_even($x)
{
    if ($x % 2 == 0)
        return true;
    return false;
}
if (!check_even(5)){
    echo "đây là số lẻ!";
}else 
echo "đây là số chẵn!"
?>
