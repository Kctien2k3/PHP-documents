<?php 
////// lấy thông tin id
$id = (int)$_GET['id'];
///// hàm truy xuất thông tin từ page
$item = get_page_by_id($id);
// show_array($item);
?>
<?php 
get_header();
?>
<div id="main-content-wp" class="detail-news-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar();?>
        <div id="content" class="fl-right">
            <div class="section" id="detail-news-wp">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $item['page_title']?></h3>
                </div>
                <div class="section-detail">
                    <p class="create-date"><?php echo $item['created_at']?></p>
                    <div class="content-news">  
                        <p><?php echo $item['page_content']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
get_footer();
?>