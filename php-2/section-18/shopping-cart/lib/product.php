<?php
/////////////// lấy dữ liệu cho trang main 
function get_info_cat($cat_id){
    global $list_product_cat;
    if (array_key_exists($cat_id, $list_product_cat)) {
        $list_product_cat[$cat_id]['url'] = "?mod=product&act=main&cat_id={$cat_id}";
        return $list_product_cat[$cat_id];
    }
    return false;
}
// lấy dữ liệu sản phẩm 
function get_list_product_by_cat_id($cat_id){
    global $list_product;
    $result = array(); /// mảng chứa danh sách sản phẩm theo id
    foreach($list_product as $item) {
        if ($item['cat_id'] == $cat_id) {
            $item['url'] = "?mod=product&act=detail&id={$item['id']}";
            $result[] = $item;  
        }
    }
    return $result; 
}

////////////// lấy dữ liệu sản phẩm cho trang detail 
function get_product_by_id($id){
    global $list_product;
    if (array_key_exists($id, $list_product)){
        $list_product[$id]['url_add_cart'] = "?mod=cart&act=add&id={$id}";
        $list_product[$id]['url'] = "?mod=product&act=detail&id={$id}";
        return $list_product[$id];
    }
    return false; 
}
?>