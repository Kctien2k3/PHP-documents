<?php
if (isset($_POST['btn_add'])) {
    echo $_POST['post_content'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ckeditor</title>
    <script src="../ckeditor/ckeditor/ckeditor.js"></script>
    <script src="../ckfinder/ckfinder.js"></script>
</head>
<body>
    <style>
        #content {
            width: 960px;
            margin: 0px auto;
        }
    </style>
    <div id="content">
    <h1>tích hợp ckeditor vào website</h1>
    <form method="POST">
    <textarea name="post_content" class="ckeditor"></textarea>
    <br>
    <input type="submit" name="btn_add" value="xuất dữ liệu">
    </form>
    </div>
</body>
</html>