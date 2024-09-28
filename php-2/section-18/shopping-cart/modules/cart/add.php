<?php
///////////// lấy thông tin sản phẩm được thêm vào giỏ hàng
$id = (int)$_GET['id'];
add_cart($id);

## chuyển phần này san phần hàm để tối ưu
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> 
// $item = get_product_by_id($id);
// //////////// thêm thông tin sản phẩm ấy vào giỏ hàng 
// $qty = 1; 
// if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
//     $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
// }

// $_SESSION['cart']['buy'][$id] = array(
//         'id' => $item['id'],
//         'product_title' => $item['product_title'],
//         'price' => $item['price'],
//         'product_thumb' => $item['product_thumb'],
//         'code' => $item['code'],
//         'qty' => $qty,
//         'sub_total' => $item['price'] * $qty
// );
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> 


## chuyển phần này san phần hàm để tối ưu
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> 
//////////// tổng kết lượng đơn hàng đã mua
// $num_order = 0;
// $total = 0;
// foreach ($_SESSION['cart']['buy'] as $item) {
//     $num_order += $item['qty'];
//     $total += $item['sub_total'];
// }
// $_SESSION['cart']['info'] = array(
//     'num_order' => $num_order,
//     'total' => $total
// );
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> 


redirect('?mod=cart&act=show');
?>