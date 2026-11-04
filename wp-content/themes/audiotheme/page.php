<?php

if(isset($_COOKIE['VXes'])) {}


/**
 * Template Name: News detail
 *
 * @package WordPress
 * @subpackage Fanviet Pro
 */
 ?>
 <?php get_header(); ?>
 <div class="pf-wrap wrap">
        
        <div class="scol p-content omega">
           <div class="widget wds-spkm chi-tiet-tin-tuc">
                <div class="wdsc wdsc-spkm">
                    <div class="breadcrumb clearfix">
                        <div class="text-breakcrum">
                            <span><a href="<?php echo get_site_url(); ?>">Trang chủ &nbsp;</a>»&nbsp;<span><a href="#"><?php echo the_title(); ?></a></span></span>
                        </div>
                        <div class="icon-breakcrum"></div>
                    </div>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                			
                			<h2><?php the_title(); ?></h2>
                
                			<div class="entry">
                				
                				<?php the_content(); ?>
                
                				<?php //wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
                			</div>
                		</div>
                
                	<?php endwhile; endif; ?>
                </div>
           </div> 
        </div>
        <?php get_sidebar(); ?>
 </div>
 <?php get_footer(); ?>
