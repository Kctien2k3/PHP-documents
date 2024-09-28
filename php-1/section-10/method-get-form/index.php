<?php 
// GET dữ liệu từ URL
$mod = $_GET['mod'];
$act = $_GET['act'];
$id = $_GET['id'];
echo "{$mod} - {$act} - {$id}";



function show_array($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
if (isset($_GET['btn_search'])){
    show_array($_GET);
    $q = $_GET['q'];
    echo $q;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>truyền dữ liệu form bằng phương thức GET</title>
</head>
<body>
    <!-- tạo ra một đường link phục vụ cho điều hướng ! -->
    <a href="?mod=product&act=detail&id=1268">sản phẩms</a>
    <!-- ------------- -->
    <h1>Tìm Kiếm</h1>
    <!-- tương tự nếu muốn link tới một file khác bạn có thể điền tên file vào thuộc tính action ="search.php" -->
<form action="" method="GET">
    Tìm Kiếm: <input type="text"  name="q">
        <input type="submit" name="btn_search" value="search">
    </form>
</body>
</html>