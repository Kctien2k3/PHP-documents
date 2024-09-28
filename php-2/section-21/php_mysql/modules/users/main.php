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
$list_users = db_fetch_array("SELECT * FROM `tbl_users`");
$num_rows = db_num_rows("SELECT * FROM `tbl_users`");


// show_array($list_users);
foreach ($list_users as &$user) { // nhớ cập nhật tham trị cho $user
    $user['url_update'] = "?mod=users&act=update&id={$user['user_id']}";
    $user['url_delete'] = "?mod=users&act=delete&id={$user['user_id']}";
}

////// tạo list_gender
$list_gender = array(
    'male' => 'Nam',
    'female' => 'Nữ'
);
?>

<div id="content">
    <style>
        .table_data thead tr td {
            font-weight: bold;
            border-bottom: 2px solid #333;
        }

        .table_data tr td {
            border-bottom: 1px solid #333;
            padding: 8px 10px;
        }
    </style>
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
                $temp = 0;
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
        <p class= "num_rows">có <?php echo $num_rows; ?> thành viên trong hệ thống!</p>
    <?php } ?>
</div>

<?php
get_footer();
?>