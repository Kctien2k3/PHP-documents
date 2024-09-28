<?php
function redirect($url = '?page=home'){
    if (!empty($url)){
        header("location: {$url}");
    }
}
?>