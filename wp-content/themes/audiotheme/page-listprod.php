<?php
/**
 * Template Name: List Product
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
            <div class="widget wds-spkm">
                <h3 class="wds-title">
                    <span>Âm thanh Hi - End</span>
                </h3>
                
                <div class="wdsc wdsc-spkm">
                   <div class="breadcrumb clearfix">
                        <div class="text-breakcrum">
                            <span><a href="/">Trang chủ &nbsp;</a>»&nbsp;<span><a href="#">Âm thanh Hi - End</a></span></span>
                        </div>
                        <div class="icon-breakcrum"></div>
                    </div>
                   <div class="srow sprod">
                        <?php for($i=1;$i<=28;$i++){?>
                        <div class="scol spm alpha">
                            <img width="205" height="140" src="<?php bloginfo('template_directory'); ?>/images/5440_b232-210x140.jpg" class=" spmimg wp-post-image" alt="Yamaha TSX-B232" />
                            <div class="mask">
                                 <a href="#" class="dm">Đặt mua</a>
                                 <a href="<?php the_permalink(); ?>" class="info">Chi tiết</a>
                            </div>
                                
                            <div class="ttsp">
                                 <h2>
                                      <a href="#" class="sfptitle spmtitle">Yamaha TSX-B232</a>
                                 </h2>
                                 <span class="price"><del><span class="amount">12.950.000vnđ</span></del> <ins><span class="amount priceaut" style="font-size: 15px;">1.000.000vnđ</span></ins></span>
                            </div> 
                        </div>
                        <?php } ?>
                        
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