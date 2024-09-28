<?php
get_header();
?>
<?php
// $sql = "SELECT * FROM `tbl_users`";
// $result = mysqli_query($conn, $sql);
// $list_users = array();
// $num_rows = mysqli_num_rows($result);
// if ($num_rows > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         $list_users[] = $row;
//     }
// }

// thay thế bằng hàm
$num_rows = db_num_rows("SELECT * FROM `tbl_users` WHERE `gender` = 'male'");
// $num_rows = db_num_rows("SELECT * FROM `tbl_users` WHERE `username` LIKE '%on%'");

////// tạo list_gender
$list_gender = array(
    'male' => 'Nam',
    'female' => 'Nữ'
);

//////////////////////// TẠO PHẦN TÍNH PHÂN TRANG
// số lượng bản ghi trên trang
$num_per_page = 5;
// tổng số bản ghi 
$total_row = $num_rows;
//tổng số trang 
$num_page = ceil($total_row / $num_per_page);
echo "số trang: {$num_page}.<br>";

//// trang hiện tại 
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
//// tính trang hiện tại 
$start = ($page - 1)*$num_per_page;
echo "Trang: {$page}.<br>";
echo "xuất phát: {$start}";

///////////////////// hàm tối ưu 
$list_users = get_users($start, $num_per_page, "`gender` = 'male'");
// $list_users = get_users($start, $num_per_page, "`username` LIKE '%on%'");


// show_array($list_users);
foreach ($list_users as &$user) { // nhớ cập nhật tham trị cho $user
    $user['url_update'] = "?mod=users&act=update&id={$user['user_id']}";
    $user['url_delete'] = "?mod=users&act=delete&id={$user['user_id']}";
}
?>

<div id="content">
    <a class="add_new" href="?mod=users&act=add">thêm mới!</a>
    <?php
    if (!empty($list_users)) {
        ?>
        <table class="table_data">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>ID</td>
                    <td>FULLNAME</td>
                    <td>USERNAME</td>
                    <td>EMAIL</td>
                    <td>GENDER</td>
                    <td>FIX</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $temp = $start;
                foreach ($list_users as $user) {
                    $temp++;
                    ?>
                    <tr>
                        <td><?php echo $temp; ?></td>
                        <td><?php echo $user['user_id']?></td>
                        <td><?php echo $user['fullname']?></td>
                        <td><?php echo $user['username']?></td>
                        <td><?php echo $user['email']?></td>
                        <td><?php echo show_gender($user['gender'])?></td>
                        <td><a href="<?php echo $user['url_update'] ?>">sửa</a> | <a href="<?php echo $user['url_delete'] ?>">xóa</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <!-- //////////////// phần về pagging -->
        <?php
        echo get_pagging($num_page, $page, "?mod=users&act=main");
        ?>

        <p class= "num_rows">có <?php echo $num_rows; ?> thành viên trong hệ thống!</p>

        <div class="clearfix"></div>
    <?php } ?>
</div>

<?php
get_footer();
?>