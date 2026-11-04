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
        
        <div class="scol p-content omega">
            <!--Sản phẩm cùng loại-->
            <div class="widget wds-listnews">
                <h3 class="wds-title">
                    <span>Tin tức</span>
                </h3>
                
                <div class="wdsc wdsc-spkm">
                    <div class="breadcrumb">
                        <div class="text-breakcrum">
                            <span><a href="<?php echo get_home_url() ?>">Trang chủ &nbsp;</a>»&nbsp;<span><a href="#">Thông tin - tin tức</a></span></span>
                        </div>
                        <div class="icon-breakcrum"></div>
                    </div>
                    <?php 
                        $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'paged'            => $page,
                        	'offset'           => 0,
                        	'category'         => '',
                        	'category_name'    => '',
                        	'orderby'          => 'post_date',
                        	'order'            => 'DESC',
                        	'include'          => '',
                        	'exclude'          => '',
                        	'meta_key'         => '',
                        	'meta_value'       => '',
                        	'post_type'        => 'post',
                        	'post_mime_type'   => '',
                        	'post_parent'      => '',
                        	'post_status'      => 'publish',
                        	'suppress_filters' => true ); 
                    ?>
                   
                    <?php
                        $my_query = new WP_Query($args);
                        while($my_query->have_posts()) {
                          $my_query->the_post();
                    ?>
                        <article class="list_news_item clearfix">
                            <div class="img_thumb">
                                <a title="<?php echo the_title(); ?>" href="<?php echo the_permalink() ?>">
                                    <?php the_post_thumbnail( array(232,151) ); ?> 
                                </a>
                            </div>
                            <div class="archive_content">
                                <h3><a title="" href="<?php echo the_permalink() ?>"><?php echo the_title(); ?></a></h3>
                                <div class="des"><?php echo wp_trim_words(get_the_content(), 60); ?></div>
                                <div class="more-link">
                                    <a href="<?php echo the_permalink() ?>">đọc tiếp »</a>
                                </div>
                            </div>
                        </article>
                    <?php 
                        }
                        $args = array(
                          'base' => add_query_arg( 'paged', '%#%' ),
                          'total' => $my_query->max_num_pages,
                          'current' => $page
                        );
                        $big = 999999999; // need an unlikely integer
                        ?>
                        <div class="paginations">
                            <?php 
                                echo paginate_links( array(
                                    	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                    	'format' => '?paged=%#%',
                                    	'current' => max( 1, get_query_var('paged') ),
                                        'prev_text'    => __('<'),
                                        'next_text'    => __('>'),
                                    	'total' => $my_query->max_num_pages
                                    ) );
                            ?>
                        </div>
                    
                <div class="paginations">
                    <ul>
                        <!--<li class="next"><a href="#"> > </a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">2</a></li>
                        <li class="current"><a href="#">1</a></li>-->
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
<?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>