<?php 
// hàm kiểm tra sự tồn tại của một phần tử key trong mảng

$list_number = array('a' => 1, 'b' => 2, 'c' => 3);
if (array_key_exists('a', $list_number)){
    echo "the 'first' element is in the array";
}else {
    echo "this element is not in the array!";
}

echo "<br>";
// hàm nồi các mảng lại với nhau 

$array_1 = array(3,68,8);
$array_2 = array(56,78,90);

$result = array_merge($array_1, $array_2);
print_r($result);

echo "<br>";
// hàm đếm số lượng phần tử của mảng

$array_3 = array(3,6,7,56,87,98,90,3445,78,8,7,986,4,563,63,425,56,76,7,8,9865,67453,6,546);
echo count($array_3);

echo "<br>";
// hàm kiểm tra sự tồn tại của một giá trị có trong mảng hay không 

$array_4 = array(3,6,7,56,87,98,90,3445,78,8,7,986,4,563,63,425,56,76,7,8,9865,67453,6,546);
echo in_array(7, $array_4);

echo "<br>";
// hàm kiểm tra có phải là mảng hay không 

$a = 6536;
$b = array(45653,8758,909);
echo is_array($b);
echo "<br>";
// hàm 
?>