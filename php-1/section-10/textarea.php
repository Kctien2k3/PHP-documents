<?php 
// function show_array($data) {
//     if (is_array($data)) {
//         echo "<pre>";
//         print_r($data);
//         echo "</pre>";
//     }
// }
if (isset($_POST['btn_add'])) {
    // show_array($_POST);
    if (empty($_POST['post_detail'])) {
        echo "your textarea is empty!";
    }else {
        $detail = $_POST['post_detail'];
        echo $detail;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lấy dữ liệu từ textarea</title>
</head>
<body>
    <h1>thêm bài viết</h1>
    <form action="" method="POST">
        <label for="">detail</label><br>
        <textarea name="post_detail" cols="30" rows="10"></textarea><br>
        <input type="submit" name="btn_add" value="thêm bài viết">
    </form>
</body>
</html>