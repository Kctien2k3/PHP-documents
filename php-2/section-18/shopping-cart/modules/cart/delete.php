<?php 
/////// xóa sản phẩm nào?
$id = (int)$_GET['id'];
// tạo hàm xóa sp
delete_cart($id);
// chuyển hướng tới giỏ hàng
redirect("?mod=cart&act=show");
?>