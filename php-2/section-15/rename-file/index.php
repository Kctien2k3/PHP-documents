<!-- <?php
require 'lib/data.php';
// kiểm tra đã submit chưa 
if (isset($_POST['upload_file'])) {
    show_array($_FILES);

    ////// thư mục chưa file upload
    $upload_dir = 'uploads/';
    ////// đường dẫn của file sau khi upload
    $upload_file = $upload_dir . $_FILES['file']['name'];

    ### xử lý upload đúng file ảnh
    $error = array();
    $type_allow = array('png', 'jpg', 'jpeg', 'gift');
    $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

    if (!in_array(strtolower($type), $type_allow)) {
        $error['type'] = "your file img upload is not allowed! Please upload files .png, .jpg, .gif, and .gift";
    } else {
        ### kiểm tra kích thức file (20MB ~ 29.000.000 Bytes) 
    $file_size = $_FILES['file']['size'];
    if ($file_size > 29000000) {
        $error['file_size'] = "your file upload is too big (only upload file size <img 20MB ~ 29.000.000)";
    }
    echo "your file size: {$file_size}" . "<br>";

    ### kiểm tra upload file trùng trên hệ thống!
    if (file_exists($upload_file)) {
       // tạo file copy mới (đổi tên tự động)
       $file_name = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
       $new_file_name = $file_name."- copy.";
       $new_upload_file = $upload_dir.$new_file_name.$type;
       // kiểm tra tồn tại của file mới
       $k = 1;
       while (file_exists($new_upload_file)) {
        $new_file_name = $file_name."- copy({$k})";
        $k++;
        $new_upload_file = $upload_dir.$new_file_name.$type;
       }
       // gán đường dẫn cho file mới
       $upload_file = $new_upload_file;
  
       
        // $error['file_exists'] = "your file is exists on server!";
    }
    }
    


    ### xử lý khi upload đúng file
    if (empty($error)) {
        // echo "your file upload is allow!";
        // chuyển file lên server!
    if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
        echo "upload file successfully !" . "<br>";
        echo "<img scr='{$upload_file}'/><br>";
        echo "<a href='{$upload_file}'>Download: {$_FILES['file']['name']} </a>";
    } else {
        echo "upload file failed!";
    }
    } else {
        show_array($error);
    } 
}
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload file image on server!</title>
</head>

<body>
    <h1>upload image on server!</h1>
    <!-- nếu muốn link tới một file khác thì có thể sử dụng action="upload.php" -->
    <form enctype="multipart/form-data" method="POST">
        <input type="file" name="file"><br><br>
        <input type="submit" name="upload_file" value="upload file">
    </form>
</body>

</html>