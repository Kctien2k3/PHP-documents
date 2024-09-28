<?php
//  -- danh mục tin tức
//  -- danh mục sản phẩm 
//  -- menu

$data = array(
    1 => array(
        'id' => 1,
        'name' => 'kinh doanh',
        'parent_id' => 0 // tức là cấp cha và không phụ thuộc vào id nào 
    ),
    2 => array(
        'id' => 2,
        'name' => 'thể thao',
        'parent_id' => 0
    ),
    3 => array(
        'id' => 3,
        'name' => 'quốc tế',
        'parent_id' => 1 // phụ thuộc vào id = 1 là cấp con của kinh doanh
    ),
    4 => array(
        'id' => 4,
        'name' => 'doanh nghiệp',
        'parent_id' => 1
    ),
    5 => array(
        'id' => 5,
        'name' => 'bóng đá',
        'parent_id' => 2 // phụ thuộc vào id = 2 là cấp con của thể thao
    ),
    6 => array(
        'id' => 6,
        'name' => 'marathon',
        'parent_id' => 2
    ),
    7 => array(
        'id' => 7,
        'name' => 'ngoại hạng Anh', // là cấp con của id = 5
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
function data_tree($data, $parent_id = 0, $level = 0)
{
    $result = array();
    foreach ($data as $v) {
        if ($v['parent_id'] == $parent_id) {
            $v['level'] = $level;
            $result[] = $v;
            if (has_child($data, $v['id'])) {
                $result_child = data_tree($data, $v['id'], $level + 1);
                $result = array_merge($result, $result_child);
            }
        }
    }
    return $result;
}

// echo "<pre>";
// print_r(data_tree($data, 0));
$result = data_tree($data)
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table class="table w-100">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            foreach ($result as $v) {
                $i ++;
                ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo str_repeat('--|--', $v['level']).$v['name'] ?></td>
                </tr>
            <?php } ?>


        </tbody>
    </table>
</body>

</html>