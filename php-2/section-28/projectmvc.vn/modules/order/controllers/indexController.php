<?php


function construct() { // có phạm vi hoạt động trên toàn bộ action còn lại
    // load_view('index');
}

function indexAction() {
    load_view('index');
}

function updateAction() {
    $id = $_POST['id'];
    echo $id;
}
