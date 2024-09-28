<?php
/////// xử lý hàm với $_session[cart][buy]
function add_cart($id){
    global $list_product;
    $item = get_product_by_id($id);
    //////////// thêm thông tin sản phẩm ấy vào giỏ hàng 
    $qty = 1;
    if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
    }

    $_SESSION['cart']['buy'][$id] = array(
        'id' => $item['id'],
        'url' => $item['url'],
        'product_title' => $item['product_title'],
        'price' => $item['price'],
        'product_thumb' => $item['product_thumb'],
        'code' => $item['code'],
        'qty' => $qty,
        'sub_total' => $item['price'] * $qty
    );
    //// sau khi làm xong hàm này nhớ update info cart
    update_info_cart();
}
/////////////// xử lý hàm tổng kết
function update_info_cart(){
    if (isset($_SESSION['cart'])) {
        $num_order = 0;
        $total = 0;
        foreach ($_SESSION['cart']['buy'] as $item) {
            $num_order += $item['qty'];
            $total += $item['sub_total'];
        }
        $_SESSION['cart']['info'] = array(
            'num_order' => $num_order,
            'total' => $total
        );
    }
}

////////////// hàm xử lý thông tin ở giỏ hàng
function get_list_buy_cart(){
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart']['buy'] as &$item){
            $item['url_delete_cart'] = "?mod=cart&act=delete&id={$item['id']}";
            // $_SESSION['cart']['buy'][$item['id']] = $item;
        }
        return $_SESSION['cart']['buy'];
    }
    return false;
}

////////////////// hàm điều chỉnh số lượng đơn trên biểu tượng giỏ hàng
function get_num_order_cart(){
    if (isset($_SESSION['cart'])){
        return $_SESSION['cart']['info']['num_order'];
    }
    return false;
}
///////////////// hàm điều chỉnh tổng số tiền trong giỏ hàng
function get_total_cart() {
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['total'];
    }
    return false;
}

/////////////// tạo hàm xóa phần tử trong giỏ hàng
function delete_cart($id) {
    if (isset($_SESSION['cart'])){
        /// xóa sp có id trong giỏ hàng
        if (!empty($id)){
            unset($_SESSION['cart']['buy'][$id]);
            update_info_cart();
        }else { //// ngược lại sẽ xóa tất cả
            unset($_SESSION['cart']);
        } 
    
    }
}
//////////////// tạo hàm update cart
function update_cart($qty){
     foreach ($qty as $id => $new_qty){
     $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
     $_SESSION['cart']['buy'][$id]['sub_total'] = $new_qty * $_SESSION['cart']['buy'][$id]['price'];
     }
     update_info_cart();
}
?>