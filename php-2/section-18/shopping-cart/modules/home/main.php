<?php
get_header();
?>
<?php
// show_array($list_page);
// show_array($list_product_cart);
// show_array($list_product);
///////// tạo hàm tương ứng để đỗ dữ liệu theo id và cat_id
// lấy thông tin danh mục
$info_cat_mobile = get_info_cat(1);
$info_cat_macbook = get_info_cat(2);
// lấy danh sách sản phẩm 
$list_mobile = get_list_product_by_cat_id(1);
$list_macbook = get_list_product_by_cat_id(2);




?>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <!-- cần thay đổi phần h3 thành thẻ a để tạo liên kết với trang sản phẩm.  -->
                    <a class="section-title" href="<?php echo $info_cat_mobile['url'];?>"><?php echo $info_cat_mobile['cat_title']?></a> 
                </div>
                <div class="section-detail">
                <?php 
                    if (!empty($list_mobile)) {
                    ?>
                    <ul class="list-item clearfix">
                        <?php 
                        foreach ($list_mobile as $item) {
                        ?>
                        <li>
                            <a href="<?php echo $item['url']?>" title="" class="thumb">
                                <img src="<?php echo $item['product_thumb']?>" alt="">
                            </a>
                            <a href="<?php echo $item['url']?>" title="" class="title"><?php echo $item['product_title']?></a>
                            <p class="price"><?php echo currency_format($item['price'])?></p>
                        </li>  
                        <?php }?>
                    </ul>
                    <?php }?>
                </div>
            </div>
            <div class="section list-cat">
                <div class="section-head">
                    <!-- <h3 class="section-title">Điện thoại</h3> -->
                    <a class="section-title" href="<?php echo $info_cat_macbook['url'];?>"><?php echo $info_cat_macbook['cat_title']?></a> 
                </div>
                <div class="section-detail">
                <?php 
                    if (!empty($list_macbook)) {
                    ?>
                    <ul class="list-item clearfix">
                        <?php 
                        foreach ($list_macbook as $item) {
                        ?>
                        <li>
                            <a href="<?php echo $item['url']?>" title="" class="thumb">
                                <img src="<?php echo $item['product_thumb']?>" alt="">
                            </a>
                            <a href="<?php echo $item['url']?>" title="" class="title"><?php echo $item['product_title']?></a>
                            <p class="price"><?php echo currency_format($item['price'])?></p>
                        </li>  
                        <?php }?>
                    </ul>
                    <?php }?>
                </div>
            </div>
            <!-- <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title">Máy tính bảng</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                        <li>
                            <a href="?page=detail_product" title="" class="thumb">
                                <img src="public/images/img-product.png" alt="">
                            </a>
                            <a href="" title="" class="title">Lenovo IdeaPad 100S</a>
                            <p class="price">5.000.000đ</p>
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
</div>
<?php
get_footer();
?>