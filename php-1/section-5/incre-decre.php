<?php
// =================================================================
// phép toán tăng giảm trong php 
// =================================================================

$x = 0;

echo "x = {$x}";
echo "<br>--------------------------<br>";

// cộng sau khi thực hiện phép toán: tức là đáp án = 5 với $x++ là = 0
$t = $x++ + 5;
echo "t = {$t}";

// trừ sau kkhi thực hiện phép toán" cũng tương tự
$t = $x-- + 5;
echo "t = {$t}";

// cộng trước khi thực hiện phép toán: đáp án = 6 với ++$x = 0 + 1
$t = ++$x + 5; 
echo "t = {$t}";

// trừ trước khi thực hiện phép toán: đáp án = 4 với --$x = 0 - 1
$t = --$x + 5;
echo "t = {$t}";
?>