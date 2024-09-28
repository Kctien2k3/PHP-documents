`    <?php
    // =================================================================
    // xóa mảng và phần tử trong mảng
    // =================================================================
    # xóa phần tử trong mảng đa chiều 
    $list_user = array(
        1 => array(
            'id' => 1,
            'fullname' => 'Kc Tiến',
            'email' => 'kctien2k3@gmail.com'
        ),
        2 => array(
            'id' => 2,
            'fullname' => 'Kiều Công Tiến',
            'email' => 'kctien2k3@gmail.com'
        )
    );

    echo "<pre>";
    print_r($list_user);
    echo "<pre>";

    unset($list_user[2]['email']);

    echo "<pre>";
    print_r($list_user);
    echo "<pre>";

    # xóa phần tử trong mảng 1 chiều
    $info = array(
        'id' => '1',
        'fullname' => 'Kc Tiến',
        'email' => 'kctien2k3@gmail.com'
    );

    echo "<pre>";
    print_r($info);
    echo "<pre>";

    unset($info['id']);

    echo "<pre>";
    print_r($info);
    echo "<pre>";
    ?>`