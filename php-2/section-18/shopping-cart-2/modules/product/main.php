<?php 
//// lấy thông tin cat_id 
$cat_id = (int)$_GET['cat_id']; 
//////// hàm lấy thông tin của danh mục
$info_cat =  get_info_cat($cat_id);
// show_array($info_cat);
////////// lấy danh sách các sản phẩm theo cat_id
$list_item = get_list_product_by_cat_id($cat_id);
// show_array($list_item);
?>
<?php 
get_header();
?>
<div id="main-content-wp" class="category-product-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar();?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title">Laptop</h3>
                    <p class="section-desc">Có 20 sản phẩm trong mục này</p>
                </div>
                <div class="section-detail">
                    <?php 
                    if (!empty($list_item)) { ?>
                    <ul class="list-item clearfix">
                        <?php foreach($list_item as $item) {?>
                            <li>
                            <a href="?" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <?php }?>
                    </ul>
                    <?php }?>
                </div>
            </div>
            <div class="section" id="pagenavi-wp">
                <div class="section-detail">
                    <ul id="list-pagenavi">
                        <li class="active">
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                    </ul>
                    <a href="" title="" class="next-page"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
get_footer();
?>