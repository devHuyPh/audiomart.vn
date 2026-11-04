<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
 <div class="pf-wrap wrap">
    <?php get_sidebar(); ?>
     <div class="scol p-content omega">
        <div class="widget wds-spkm search">
            <div class="wdsc wdsc-spkm">
                <div class="breadcrumb clearfix">
                    <div class="text-breakcrum">
                        <span><a href="<?php echo get_site_url(); ?>">Trang chủ &nbsp;</a>»&nbsp;<span><a href="#"><?php echo 'Kết quả tìm kiếm' ?></a></span></span>
                    </div>
                    <div class="icon-breakcrum"></div>
                </div>
                <?php if ( have_posts() ) : ?>
                <?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

					endwhile;

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
            </div>
        </div>
     </div>
 </div>
 <?php get_footer(); ?>