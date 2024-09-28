<?php 
function show_array($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
// show array ra màng hình với phương pháp GET
show_array($_GET);

$q = $_GET['q'];  
echo $q;    
?>