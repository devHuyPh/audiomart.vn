<?php get_header(); ?>
<div class="pf-wrap wrap">
        <?php get_sidebar(); ?>
        <div class="scol p-content omega">
            <div class="pct srow">
                <div class="scol slideshow alpha">
                <?php die(); ?>
                testjdfskjfsdk
                    <?php echo do_shortcode('[metaslider id=31]'); ?>
                </div>
                <div class="scol kmnews omega">
                    <div class="widget wds-km">
                        <h3 class="wds-title">Tin tức khuyến mãi</h3>

                        <div class="wdsc wdsc-kmnews">
                            <div class="wdsc-kmnewsc">
                                <?php
                                    $newsKm = new WP_Query('showposts=4&cat=47');
                                    while($newsKm->have_posts()):
                                        $newsKm->the_post();?>
                                        <div class="srow">
                                            <p class="scol kmimg alpha">
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                    <?php the_post_thumbnail(array(90,60)); ?>
                                                </a>
                                            </p>
                                            <h4 class="scol kmtitle alpha omega"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        </div>
                                    <?php endwhile;
                                    wp_reset_postdata();
                                 ?>
                            </div>
                            <div class="km-more">
                                <a href="/category/tin-tuc-khuyen-mai">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!--Sản phẩm khuyến mãi-->
            <div class="widget wds-spkm">
                <h3 class="wds-title">
                    <span>Sản phẩm khuyến mãi</span>
                    <ul>
                        <li><a href="#">Hi-End</a></li>
                        <li><a href="#">Hi-Fi</a></li>
                        <li><a href="#">Tivi</a></li>
                        <li><a href="#">Karaoke</a></li>
                        <li><a href="#">Máy nghe nhạc</a></li>
                    </ul>
                </h3>
                <div class="wdsc wdsc-spkm">
                    <div class="srow sprod">
                        <?php for($i=1;$i<=8;$i++){?>
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
            <!--Sản phẩm nổi bật-->
            <div class="widget wds-spmn">
                <h3 class="wds-title">
                    <span>Sản phẩm mới nhất</span>
                    <ul>
                        <li><a href="#">Hi-End</a></li>
                        <li><a href="#">Hi-Fi</a></li>
                        <li><a href="#">Tivi</a></li>
                        <li><a href="#">Karaoke</a></li>
                        <li><a href="#">Máy nghe nhạc</a></li>
                    </ul>
                </h3>

                <div class="wdsc wdsc-spkm">
                    <div class="srow sprod">
                        <?php for($i=1;$i<=12;$i++){?>
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