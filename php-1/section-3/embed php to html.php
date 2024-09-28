<?php 
//nhúng php vào html
$post_title = 'Thi đấu ấn tượng trong năm 2022, Djokovic san bằng kỷ lục của Jimmy Connors';
$post_content = '(Dân trí) - Với việc giành đủ 5 danh hiệu ở các cấp độ khác nhau trong năm 2022, Novak Djokovic đã san bằng kỷ lục của huyền thoại Jimmy Connors.
Trong năm 2022, Djokovic đã có 5 chức vô địch trải đều các cấp độ gồm Grand Slam (Wimbledon), ATP Finals (Turin), ATP Masters 1000 (Rome Masters), ATP 500 (Astana Open) và ATP 250 (Tel Aviv Open).
<img title="Thi đấu ấn tượng trong năm 2022, Djokovic san bằng kỷ lục của Jimmy Connors - 1" src="https://icdn.dantri.com.vn/thumb_w/680/2022/12/06/djokovic-crop-1670334767026.jpeg" alt="Thi đấu ấn tượng trong năm 2022, Djokovic san bằng kỷ lục của Jimmy Connors - 1" data-width="1024" data-height="682" data-original="https://icdn.dantri.com.vn/2022/12/06/djokovic-crop-1670334767026.jpeg" data-photo-id="2250569" data-track-content="" data-content-name="article-content-image" data-content-piece="article-content-image_2250569" data-content-target="/the-thao/thi-dau-an-tuong-trong-nam-2022-djokovic-san-bang-ky-luc-cua-jimmy-connors-20221206205449325.htm" data-adbro-processed="true">
<div id="adbro" class="adbro-md" style="position: relative; display: block; overflow: hidden; width: 680px; height: 453px; top: -461px; margin-bottom: -453px; margin-left: auto; margin-right: auto;">…</div>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        h1 {
            color: gray;
        }
    </style>
    <div id="post">
        <h1 class="post-title"><?php echo "$post_title" ?></h1>
        <div class="post-content">
            <?php   echo "$post_content"; ?>
        </div>
    </div>
</body>
</html>