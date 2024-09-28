<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
if (isset($_POST['btn_add'])) {
    show_array($_POST);
    if (isset($_POST['cat'])) {
        // cách xử lý 1:
        foreach ($_POST['cat'] as $item) {
            echo $item.'<br>';
        }
        // cách xử lý 2:
        $list_cat = implode(',', $_POST['cat']);
        echo $list_cat;
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lấy dữ liệu từ list-checkbox</title>
</head>

<body>
    <form action="" method="POST">
        <input type="checkbox" name="cat[12]" value="1" id="cat_1">
        <label for="cat_1">thể thao</label><br>
        <input type="checkbox" name="cat[]" value="2" id="cat_2">
        <label for="cat_2">xã hội</label><br>
        <input type="submit" name="btn_add" value="thêm bài viết">
    </form>
</body>

</html>