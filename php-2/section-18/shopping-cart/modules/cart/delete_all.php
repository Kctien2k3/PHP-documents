<?php 
// tạo hàm xóa tất cả cart khi loại bỏ id
delete_cart($id);
// chuyển hướng tới giỏ hàng
redirect("?mod=cart&act=show");
?>