<?php
//================================================
// cấu trúc switch case trong php
//================================================

# cấu trúc switch case phát hiện ngày thứ trong tuần thông qua dữ liệu số 
$day = 3;
switch ($day) {
    case 2:
    echo "hôm này là thứ hai";
    break;
    case 3:
    echo "hôm này là thứ ba";
    break;
    case 4:
    echo "hôm này là thứ tư";
    break;
    case 5:
    echo "hôm này là thứ năm";
    break;
    case 6:
    echo "hôm này là thứ sáu";
    break;
    case 7:
    echo "hôm này là thứ bảy";
    break;
    default:
        echo "hôm này là chủ nhật";
        break;
}
?> 