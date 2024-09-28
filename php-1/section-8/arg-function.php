<?php

# Hàm số 1: hàm có 1 tham số
function check_even($n)
{
    if ($n % 2 == 0) {
        echo "{$n} is not even.<br>";
    }
    ;
}
;
check_even(6);

# Hàm số 2: hàm có 2 tham số
function sum($a, $b)
{
    $t = $a + $b;
    echo $t . "<br>";
}
sum(6, 57);

# hàm số 3: hàm có nhiều tham số

function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
// vd về cách sử dụng hàm func_num_args()
function countArg()
{
    echo func_num_args();
}
echo "<br>";
countArg(1, 2, 4, 5);
// vd về cách sử dụng hàm func_get_args
function sum_multi_number()
{
    // 0 1 2 3
    # dùng hàm fun_get_args() sẽ có ưu thế hơn khi có nhiều biến mà ta chỉ cần khai báo 1 lần duy nhất. 
    $list_args = func_get_args();
    // tính tổng: 
    $t = 0;
    foreach ($list_args as $value) {
        $t += $value;
    }
    # tác dụng của hàm function show_array:
    show_array($list_args);
    echo $t;
    // echo "<pre>";
    // print_r($list_args);
    // echo "</pre>";

    # cách sử dụng hàm func_get_arg() hàm này sẽ có hạn chế ở việc nếu có nhiều tham số chúng ta sẽ làm code dài và nặng hơn
    // $a = func_get_arg(0);
    // $b = func_get_arg(1);
    // echo "a = {$a} <br> b = {$b}";
}
;
sum_multi_number(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13);



#  một cách khác để tính tổng với mảng 
function list_multi_number($list_number = array())
{
    if (is_array($list_number)) {
        $t = 0;
        foreach ($list_number as $value) {
            $t += $value;
        }
        echo "<br>";
        echo $t;
        echo "<br>";
    }
}
$list_number = array(2, 3, 5, 7);
list_multi_number($list_number);



echo "===============================================================================================================";
echo "<br>";

# phần nâng cao hơn cần phải nắm trong php
// input( type="text" name="" value ='' id= '' class = '')
function create_input_text($name, $value, $option = array())
{
    $name = func_get_arg(0);
    $value = func_get_arg(1);
    $option = func_get_arg(2);
    // $id = '';
    // $class = '';
    if (!empty($option)) {
        $id = $option['id'];
        $class = $option['class'];
    }
    // cách ktra hàm có lỗi hay không 
    // echo $name.'-'.$value;
    // ----------------------------- 

    show_array($option);

    $input_html = "<input type='text' name ='{$name}' value='{$value}' id = '{$id}' class = '{$class}'/>";
    echo $input_html;
}
;

create_input_text('username', '', $option = array('id' => 'username', 'class' => 'form_input'));

?>