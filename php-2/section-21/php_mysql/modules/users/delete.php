<?php 
//// lấy thông tin id 
$id = (int)$_GET['id'];
/////// sử dụng cấu trúc xóa mysql
// $sql = "DELETE FROM `tbl_users` WHERE `user_id` = {$id}";

// if (mysqli_query($conn, $sql)) {
//     redirect('?mod=users&act=main');
// }

// tối ưu bằng hàm 
db_delete('tbl_users', "`user_id` = {$id}");
    redirect('?mod=users&act=main');

?>