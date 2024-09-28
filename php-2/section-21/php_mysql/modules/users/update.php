<?php 
//// lấy id xuống 
$id = (int)$_GET['id'];


// show_array($item);
?>
<?php 
get_header();
?>
<!-- validation form  -->
<?php
if (isset($_POST['btn_update'])) {
    $error = array();
    $alert = array();
    // kiểm tra fullname
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "không được để trống trường fullname!";
    }else {
        $fullname = $_POST['fullname'];
    }


    // kiểm tra giới tính 
    if (empty($_POST['gender'])) {
        $error['gender'] = "không được để trống trường giới tính!";
    }else {
        $gender = $_POST['gender'];
    }




    // kết luận 
    if (empty($error)) {
        /////////// thêm thành viên vào trong sql 
        // $sql = "UPDATE `tbl_users` SET `fullname` = '{$fullname}', `gender` = '{$gender}' WHERE `user_id` = {$id}";
        // if (mysqli_query($conn, $sql)) {
        //     $alert['success'] = "cập nhật dữ liệu thành công!";
        // }else {
        //     echo "lỗi" .mysqli_error($conn);
        // }

        // tối ưu bằng hàm 
        $data = array(
            'fullname' => $fullname,
            'gender' => $gender,
        );
        db_update('tbl_users', $data, "`user_id` = {$id}");
    }else {
        // show_array($error);
    }
}
////// sử dụng select để truy xuất thông tin và chỉnh sửa trong mysql
// $sql = "SELECT * FROM `tbl_users` WHERE `user_id` = {$id}";
// $result = mysqli_query($conn, $sql);
// $item = mysqli_fetch_array($result);

// tối ưu hàm update bằng hàm 
$item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_id` = {$id}");



?>




<div id="content">
<!-- ////////////////////// phần style css //////////////////// -->
<style>
#form_reg {
    with: 250px;
}
label {
    display: block;
    margin: 0 0 5px 0;
}
input {
    display: block;
    margin-bottom: 10px;
}
input[type="text"], input[type="password"], input[type="email"] {
    padding: 5px 10px;
    border: 1px solid #dedede;
    width: 100%;
}
#btn_update {
    margin-top: 20px;
    display: block;
    padding: 9px 10px;
    text-align: center;
    background: #ffa84c;
    cursor: pointer;
    border: none;
    width: 100%;
    text-transform: uppercase;
}
select {
    padding: 6px 10px;
    border: 1px solid #dedede;
    width: 100%;
}
.error {
    color: red;
}
</style>
<!-- ////////////////////// phần style css //////////////////// -->
<!-- //////////////////////////////////////////////////// -->
<?php 
if (!empty($alert['success'])) {
?>
<p class="success"><?php echo $alert['success']?></p>
<?php }?>
<!-- //////////////////////////////////////////////////// -->



<h1>thêm mới</h1>
<form action="" id="form_reg" method="POST">
<label for="fullname">fullname:</label>
<input type="text" name="fullname" id="fullname" value="<?php if(!empty($item['fullname'])) echo $item['fullname']?>">

<!-- //////////////////////////////////////////////////// -->
<?php 
if (!empty($error['fullname'])) {
?>
<p class="error"><?php echo $error['fullname']?></p>
<?php }?>
<!-- //////////////////////////////////////////////////// -->

<select name="gender" id="">
    <option value="">--chọn giới tính--</option>
    <option <?php if(isset($item['gender']) && $item['gender'] == 'male') echo "selected='selected' "?> value="male">Nam</option>
    <option <?php if(isset($item['gender']) && $item['gender'] == 'female') echo "selected='selected' "?> value="female">Nữ</option>
</select>

<!-- //////////////////////////////////////////////////// -->
<?php 
if (!empty($error['gender'])) {
?>
<p class="error"><?php echo $error['gender']?></p>
<?php }?>
<!-- //////////////////////////////////////////////////// -->

<input type="submit" name="btn_update" id="btn_update" value="đăng ký">
</form>
</div>
<?php
get_footer();
?>