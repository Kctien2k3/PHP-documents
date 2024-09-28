<?php
## hàm tính độ dài chuỗi 
$my_string = "kieu cong tien";
echo strlen($my_string);
echo "<br>";

## hàm in hóa ký tự đầu tiên 
echo ucfirst($my_string);
echo "<br>";
echo ucwords($my_string);
echo "<br>";

## hàm xóa bớt khoảng trắng dư thừa trong chuỗi
$string_1 = "Kieu          Cong            Tien     ";
echo trim($string_1);
echo "<br>";

## hàm lặp lại ký tự chuỗi 
echo str_repeat("--", 4);
echo "<br>";

## hàm mã hóa
echo md5("kieu cong tien");
echo "<br>";

## hàm kết hợp chuỗi 
$list_id = array('1','3','5','6','7','8','9','10','11','12');
echo join(',', $list_id);
echo "<br>";
echo implode(',', $list_id);
echo "<br>";

## hàm phân tách chuỗi thành mảng
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[3];
echo "<br>"; 
print_r($pieces);
echo "<pre>";

## htmlspecialchars
// echo "<script> alert('ok');</script>"; => rất nguy hiểm khi xuất ra theo dạng này trong php mà thay vào đó ta sử dụng htmlspecialchars
echo htmlspecialchars("<script> alert('ok');</script>");
echo "<br>";
$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
?>