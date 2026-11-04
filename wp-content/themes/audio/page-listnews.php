<?php
/**
 * Template Name: List News
 *
 * @package WordPress
 * @subpackage Fanviet Pro
 */
 ?>
 <?php get_header(); ?>
<div class="pf-wrap wrap">
        <?php get_sidebar(); ?>
        <div class="scol p-content omega">
            <!--Sản phẩm cùng loại-->
            <div class="widget wds-listnews">
                <h3 class="wds-title">
                    <span>Tin tức</span>
                </h3>
                
                <div class="wdsc wdsc-spkm">
                    <div class="breadcrumb">
                        <div class="text-breakcrum">
                            <span><a href="/">Trang chủ &nbsp;</a>»&nbsp;<span><a href="#">Thông tin - tin tức</a></span></span>
                        </div>
                        <div class="icon-breakcrum"></div>
                    </div>
                <?php for($i=1;$i<=9;$i++){?>
                    <article class="list_news_item clearfix">
                        <div class="img_thumb">
                            <a title="" href="#">
                                <img width="232" height="151" src="<?php bloginfo('template_directory'); ?>/images/news.png" class="attachment-post-thumbnail wp-post-image" alt="" />
                            </a>
                        </div>
                        <div class="archive_content">
                            <h3><a title="" href="#">DxOMark: Camera của Sony Xperia Z2 đã soán ngôi Nokia pureview</a></h3>
                            <p>Nhân dịp 30/4 - 1/5 và tỏ lòng tri ân khách hàng đã quan tâm, tin tưởng và sử dụng dịch vụ tại Thẩm mỹ viện Đông Á trong thời gian vừa qua, chúng tôi  áp dụng chương trình khuyến mãi hấp dẫn giành tặng khách hàng nhau sau</p>
                            <div class="more-link">
                                <a href="#">đọc tiếp »</a>
                            </div>
                        </div>
                    </article>
                <?php } ?>
                <div class="paginations">
                    <ul>
                        <li class="next"><a href="#">></a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">2</a></li>
                        <li class="current"><a href="#">1</a></li>
                    </ul>
                </div>    
                </div>
            </div>
            <!--partner-->
            <div class="widget wds-partner">
                <ul>
                    <?php
                        for($j=0;$j<=3;$j++){?>
                        <li>
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/partnert-logo.png" alt="logo partnert"/></a>
                        </li> 
                        <?php } ?>
                </ul>
            </div><!--end: partner-->
        </div>
    </div>
<?php get_footer(); ?>