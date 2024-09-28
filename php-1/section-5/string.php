<?php
//================================================
// phép toán chuỗi trong php
//================================================

// sử dụng chuỗi (.)
$str_1 = "Xin chào ";
$str_2 = "<strong>Addmin</strong>";

echo "str_1 = {$str_1}";
echo "<br>";
echo "str_2 = {$str_2}";
echo "<br>-----------------------<br>";

$notifi = $str_1 . $str_2;
echo $notifi;

// sử dụng chuỗi .=
$notifi = "xin chào ";
$username = "Kc tiến";

echo "str_1 = {$notifi}";
echo "<br>";
echo "str_2 = {$username}";
echo "<br>-----------------------<br>";

$notifi .= $username;
echo $notifi;

?>