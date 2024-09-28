<?php
get_header();
?>
<!-- validation form  -->
<?php
if (isset($_POST['btn_reg'])) {
    $error = array();
    $alert = array();
    // kiểm tra fullname
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "không được để trống trường fullname!";
    }else {
        $fullname = $_POST['fullname'];
    }

    // kiểm tra username
    if (empty($_POST['username'])) {
        $error['username'] = "không được để trống trường username!";
    // }else {
    //     $pattern = '/^[A-Za-z0-9_\.]{6,32}$/';
    //     if (!preg_match($pattern, $_POST['username'])) {
    //         $error['username'] = "username không đúng định dạng!";
    //     }else {
    //         $username = $_POST['username'];
    //     }
    }else {
            $username = $_POST['username'];
    }

    // kiểm tra email
    if (empty($_POST['email'])) {
        $error['email'] = "không được để trống trường email!";
    // }else {
    //     $pattern = '/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/';
    //     if (!preg_match($pattern, $_POST['email'])){
    //         $error['email'] = "email không đúng định dạng!";
    //     }else {
    //         $email = $_POST['email'];
    //     }
    }else {
            $email = $_POST['email'];
    }

    // kiểm tra password 
    if (empty($_POST['password'])) {
        $error['password'] = "không được để trống trường password!";
    // }else {
    //     $pattern = '/^[A-Za-z0-9_\.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/';
    //     if (!preg_match($pattern, $_POST['password'])) {
    //         $error['password'] = "password không đúng đinh dạng!";
    //     }else {
    //     $password = $_POST['password'];
    //     }
    }else {
        $password = $_POST['password'];
    }

    // kiểm tra giới tính 
    if (empty($_POST['gender'])) {
        $error['gender'] = "không được để trống trường giới tính!";
    }else {
        $gender = $_POST['gender'];
    }




    // kết luận 
    if (empty($error)) {
        // /////////// thêm thành viên vào trong sql 
        // $sql = "INSERT INTO `tbl_users` (`fullname`, `email`, `password`, `username`, `gender`)"."VALUES ('{$fullname}', '{$email}', '{$password}', '{$username}', '{$gender}')"; 
        // if (mysqli_query($conn, $sql)) {
        //     $alert['success'] = "thêm dữ liệu thành công!";
        // }else {
        //     echo "lỗi" .mysqli_error($conn);
        // }

        // thay thế bằng hàm 
        $data = array(
            'fullname' => $fullname,
            'email' => $email,
            'password' => $password,
            'username' => $username,
            'gender' => $gender,
        );
        $id_insert = db_insert('tbl_users', $data);
        echo $id_insert;
    }else {
        // show_array($error);
    }
}




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
#btn_reg {
    margin-top: 20px;
    display: block;
    padding: 9px 10px;
    text-align: center;
    background: #ffa84c;
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
<input type="text" name="fullname" id="fullname">

<!-- //////////////////////////////////////////////////// -->
<?php 
if (!empty($error['fullname'])) {
?>
<p class="error"><?php echo $error['fullname']?></p>
<?php }?>
<!-- //////////////////////////////////////////////////// -->

<label for="username">username:</label>
<input type="text" name="username" id="username">

<!-- //////////////////////////////////////////////////// -->
<?php 
if (!empty($error['username'])) {
?>
<p class="error"><?php echo $error['username']?></p>
<?php }?>
<!-- //////////////////////////////////////////////////// -->

<label for="email">email:</label>
<input type="text" name="email" id="email">

<!-- //////////////////////////////////////////////////// -->
<?php 
if (!empty($error['email'])) {
?>
<p class="error"><?php echo $error['email']?></p>
<?php }?>
<!-- //////////////////////////////////////////////////// -->

<label for="password">password:</label>
<input type="password" name="password" id="password">

<!-- //////////////////////////////////////////////////// -->
<?php 
if (!empty($error['password'])) {
?>
<p class="error"><?php echo $error['password']?></p>
<?php }?>
<!-- //////////////////////////////////////////////////// -->

<select name="gender" id="">
    <option value="">--chọn giới tính--</option>
    <option value="male">Nam</option>
    <option value="female">Nữ</option>
</select>

<!-- //////////////////////////////////////////////////// -->
<?php 
if (!empty($error['gender'])) {
?>
<p class="error"><?php echo $error['gender']?></p>
<?php }?>
<!-- //////////////////////////////////////////////////// -->

<input type="submit" name="btn_reg" id="btn_reg" value="đăng ký">
</form>
</div>
<?php
get_footer();
?>