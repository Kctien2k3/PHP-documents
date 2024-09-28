<?php


function construct() { // có phạm vi hoạt động trên toàn bộ action còn lại
}

function indexAction() {
    load_view('index');
}

function detailAction(){
    echo $_GET["slug"];
    echo "<br>";
    echo $_GET["id"];
    echo "<br>";
    echo $_GET["controller"];
    echo "<br>";
    echo $_GET["action"];
    echo "<br>";
    echo $_GET["mod"];

    load_view('index');
}
function addAction() {
}

function editAction() {
}

