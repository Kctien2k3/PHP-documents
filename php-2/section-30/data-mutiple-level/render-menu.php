<?php
//  -- danh mục tin tức
//  -- danh mục sản phẩm 
//  -- menu

$data = array(
    1 => array(
        'id' => 1,
        'name' => 'kinh doanh',
        'url' => '#',
        'parent_id' => 0 // tức là cấp cha và không phụ thuộc vào id nào 
    ),
    2 => array(
        'id' => 2,
        'name' => 'thể thao',
        'url' => '#',
        'parent_id' => 0
    ),
    3 => array(
        'id' => 3,
        'name' => 'quốc tế',
        'url' => '#',
        'parent_id' => 1 // phụ thuộc vào id = 1 là cấp con của kinh doanh
    ),
    4 => array(
        'id' => 4,
        'name' => 'doanh nghiệp',
        'url' => '#',
        'parent_id' => 1
    ),
    5 => array(
        'id' => 5,
        'name' => 'bóng đá',
        'url' => '#',
        'parent_id' => 2 // phụ thuộc vào id = 2 là cấp con của thể thao
    ),
    6 => array(
        'id' => 6,
        'name' => 'marathon',
        'url' => '#',
        'parent_id' => 2
    ),
    7 => array(
        'id' => 7,
        'name' => 'ngoại hạng Anh', // là cấp con của id = 5
        'url' => '#',
        'parent_id' => 5
    )
);


/// DỮ LIỆU ĐẦU RA THEO THỨ TỰ CHA CON
// $result = array(
//     1 => array(
//         'id' => 1,
//         'name' => 'kinh doanh',
//         'parent_id' => 0 // tức là cấp cha và không phụ thuộc vào id nào 
//     ),
//     3 => array(
//         'id' => 3,
//         'name' => 'quốc tế',
//         'parent_id' => 1 // phụ thuộc vào id = 1 là cấp con của kinh doanh
//     ),
//     4 => array(
//         'id' => 4,
//         'name' => 'doanh nghiệp',
//         'parent_id' => 1
//     ),
//     // đây là danh mục tiếp theo
//     2 => array(
//         'id' => 2,
//         'name' => 'thể thao',
//         'parent_id' => 0 
//     ),
//     5 => array(
//         'id' => 5,
//         'name' => 'bóng đá',
//         'parent_id' => 2  // phụ thuộc vào id = 2 là cấp con của thể thao
//     ),
//     6 => array(
//         'id' => 6,
//         'name' => 'marathon',
//         'parent_id' => 2
//     )
// );

///////// tạo hàm data_tree và hàm kiểm tra phần tử con 

function has_child($data, $id)
{
    foreach ($data as $v) {
        if ($v['parent_id'] == $id)
            return true;
    }
    return false;
}
function render_menu($data,$menu_id="main-menu", $menu_class="", $parent_id = 0, $level = 0) {
    if ($level  == 0) {
        $result = "<ul id='{'$menu_id'}'> class='{'$menu_class'}'";
    }else {
        $result = "<ul class='sub-menu'>";
    }
    foreach ($data as $v) {
        if ($v['parent_id'] == $parent_id) {
            $result .= "<li>";
            $result .= "<li><a href='{$v['url']}'>{$v['name']}</a></li>";
            if (has_child($data, $v['id'])) {
                $result .= render_menu($data, $menu_id="main-menu", $menu_class="", $v['id'], $level + 1);
            }
            $result .= "</li>";

        }
    }
    $result .= "</ul>";
    return $result;
}
echo render_menu($data);
// echo "<pre>";
// print_r(data_tree($data, 0));
// $result = data_tree($data)
    ?>
<!-- <ul id="main-menu">
    <li><a href="">kinh doanh</a>
          <ul class="sub_menu">
               <li><a href="">quốc tế</a></li>
               <li><a href="">doanh nghiệp</a></li>
          </ul>
    </li>   
    <li><a href="">thể thao</a>
          <ul class="sub_menu">
               <li><a href="">bóng đá</a></li>
               <li><a href="">marathon</a></li>
          </ul>
    </li>
</ul> -->