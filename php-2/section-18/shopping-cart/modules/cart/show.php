<?php
get_header();
?>
<?php
$list_buy = get_list_buy_cart();
// show_array($list_buy);

?>
<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <h3 class="title">Giỏ hàng</h3>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <!-- kiểm tra có dữ liệu hay chưa  -->
        <?php
        if (!empty($list_buy)) {
            ?>
            <!-- ////////////////////////////// -->
            <div class="section" id="info-cart-wp">
                <div class="section-detail table-responsive">
                    <!-- thẻ mở của form ở đây  --> 
                    <form action="?mod=cart&act=update" method="POST">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Mã sản phẩm</td>
                                <td>Ảnh sản phẩm</td>
                                <td>Tên sản phẩm</td>
                                <td>Giá sản phẩm</td>
                                <td>Số lượng</td>
                                <td colspan="2">Thành tiền</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list_buy as $item) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $item['code'] ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                            <img src="<?php echo $item['product_thumb'] ?>" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?php echo $item['url'] ?>" title="<?php echo $item['product_title'] ?>"
                                            class="name-product"><?php echo $item['product_title'] ?></a>
                                    </td>
                                    <td>
                                        <?php echo currency_format($item['price']) ?>
                                    </td>
                                    <td>
                                        <input type="number" min="1" max="10" name="qty[<?php echo $item['id']?>]" value="<?php echo $item['qty'] ?>"
                                            class="num-order">
                                    </td>
                                    <td>
                                        <?php echo currency_format($item['sub_total']) ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo $item['url_delete_cart'] ?>" title="xóa sản phẩm"
                                            class="del-product"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>


                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <div class="clearfix">
                                        <p id="total-price" class="fl-right">Tổng giá: <span>
                                                <?php echo currency_format(get_total_cart()); ?>
                                            </span></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <div class="clearfix">
                                        <div class="fl-right">
                                            <input type="submit" id="update-cart" name="btn_update_cart" value="cập nhật giỏ hàng">
                                            <!-- <a href="" title="" id="update-cart">Cập nhật giỏ hàng</a> -->
                                            <a href="?mod=cart&act=checkout" title="" id="checkout-cart">Thanh toán</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <!-- thẻ đóng của form ở đây  -->
                    </form>
                </div>
            </div>
            <div class="section" id="action-cart-wp">
                <div class="section-detail">
                    <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng
                        <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.
                    </p>
                    <a href="?" title="" id="buy-more">Mua tiếp</a><br />
                    <a href="?mod=cart&act=delete_all" title="" id="delete-cart">Xóa giỏ hàng</a>
                </div>
            </div>
            <!-- //////////////////////// -->
            <?php
        } else {
            ?>
            <div class="section" id="cart_empty">
                <p>không có sản phẩm trong giỏ hàng! click <a href="?">Vào Đây!</a> để quay lại trang chủ!!!</p>
            </div>
            <?php
        }
        ?>

    </div>
</div>
<?php get_footer(); ?>