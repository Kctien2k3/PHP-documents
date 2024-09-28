<?php
$cat_id = (int)$_GET['cat_id'];
// echo $cat_id;
?>
<?php
get_header('product');
?>
<div id="content">
    <h1>DANH SÁCH SẢN PHẨM - danh mục <?php echo $cat_id?> </h1>
</div>
<?php
get_footer();
?>