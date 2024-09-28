<?php
//================================================
// đổ dữ liệu mảng lên html
//================================================
$list_prime = array(2, 3, 5, 7);

/* 
 * B1: chuẫn bị mảng đã xử lý
 * B2: tạo cấu trúc html mẫu
 * B3: duyệt mảng
 * B4: đổ dữ liệu
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>danh sách số nguyên tố</title>
</head>

<body>
    <h1>danh sách số nguyên tố</h1>
    <table border="1">
        <thead>
            <tr>
                <td align="center" width="30">STT</td>
                <td align="center" width="200">số nguyên tố</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $temp = 0;
            foreach ($list_prime as $value) {
                $temp++;
            ?>
            <tr>
                <td align="center"><?php echo $temp ?></td>
                <td align="center"><?php echo $value ?></td>
            </tr>
            <!-- <tr>
                <td align="center">1</td>
                <td align="center">2</td>
            </tr>
            <tr>
                <td align="center">1</td>
                <td align="center">2</td>
            </tr> -->
            <?php
            }
            ?>
        </tbody>

    </table>
</body>

</html>
<!-- ================================================================================================================= -->
<?php
//================================================
// đổ dữ liệu mảng lên html
//================================================
$list_user = array(
    1000 => array(
        'id' => 1000,
        'fullname' => 'Kc Tiến',
        'email' => 'kctien2k3@gmail.com'
    ),
    2023 => array(
        'id' => 2023,
        'fullname' => 'Kiều Công Tiến',
        'email' => 'kctien2k3@gmail.com'
    )
);
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}
/* 
 * B1: chuẫn bị mảng đã xử lý
 * B2: tạo cấu trúc html mẫu
 * B3: duyệt mảng
 * B4: đổ dữ liệu
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>danh sách thành viên</title>
</head>

<body>
    <h1>danh sách thành viên</h1>
    <table border="1">
        <thead>
            <tr>
                <td align="center" width="30">STT</td>
                <td align="center" width="50">id</td>
                <td align="center" width="50">họ & tên</td>
                <td align="center" width="50">email</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $temp = 0;
            foreach ($list_user as $user) {
                $temp++;
                show_array($user);
            ?>
            <tr>
                <td align="center"><?php echo $temp ?></td>
                <td><?php echo $user['id'] ?></td>
                <td width='200'><?php echo $user['fullname'] ?></td>
                <td width='200'><?php echo $user['email'] ?></td>
            </tr>

            <?php
            }
            ?>
        </tbody>

    </table>
</body>

</html>
<!-- ================================================================================================================= -->
<?php
//================================================
// đổ dữ liệu mảng lên html
//================================================
# trường hợp ko có dữ liệu
// $list_users = array(
//     1000 => array(
//         'id' => 1000,
//         'fullname' => 'Kc Tiến',
//         'email' => 'kctien2k3@gmail.com'
//     ),
//     2023 => array(
//         'id' => 2023,
//         'fullname' => 'Kiều Công Tiến',
//         'email' => 'kctien2k3@gmail.com'
//     )
// );
// function show_array($data)
// {
//     if (is_array($data)) {
//         echo "<pre>";
//         print_r($data);
//         echo "<pre>";
//     }
// }
/* 
 * B1: chuẫn bị mảng đã xử lý
 * B2: tạo cấu trúc html mẫu
 * B3: duyệt mảng
 * B4: đổ dữ liệu
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>danh sách thành viên</title>
</head>

<body>
    <h1>danh sách thành viên</h1>
    <?php
    if (!empty($list_users)) {
    ?>
    <table border="1">
        <thead>
            <tr>
                <td align="center" width="30">STT</td>
                <td align="center" width="50">id</td>
                <td align="center" width="50">họ & tên</td>
                <td align="center" width="50">email</td>
            </tr>
        </thead>
        <tbody>
            <?php
        $temp = 0;
        foreach ($list_users as $users) {
            $temp++;
            // show_array($user);
            ?>
            <tr>
                <td align="center"><?php echo $temp ?></td>
                <td><?php echo $users['id'] ?></td>
                <td width='200'><?php echo $users['fullname'] ?></td>
                <td width='200'><?php echo $users['email'] ?></td>
            </tr>

            <?php
        }
            ?>
        </tbody>

    </table>
    <?php }else {?>
        <p>ko có dữ liệu</p>
        <?php }?>
</body>

</html>