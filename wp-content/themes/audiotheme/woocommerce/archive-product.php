<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */
?>
<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

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
        
        <div class="scol p-content omega">
            <div class="widget wds-spkm">
                <h1 class="wds-title">
                    <span><?php woocommerce_page_title(); ?></span>
                </h1>
                
                <div class="wdsc wdsc-spkm">
                   <div class="breadcrumb clearfix">
                        <div class="text-breakcrum">
                            <span><a href="<?php echo get_site_url(); ?>">Trang chủ &nbsp;</a>»&nbsp;
<span><a href="<?php the_permalink(); ?>"><?php woocommerce_page_title(); ?></a></span>
</span>
                        </div>
                        <div class="icon-breakcrum"></div>
                    </div>
		<div class="description-archive">
			<?php echo term_description( get_queried_object_id(), 'product_cat' ); ?>
		</div>
                    <?php //list product ?>
			<div class="block-adv-cat">
                        <?php echo do_shortcode('[advertisment_cat]'); ?>
			<?php print apply_filters( 'taxonomy-images-queried-term-image', '', array('image_size'   => 'Fullsize',
    ));?>
                    </div>
                   <div class="srow sprod">
                        <?php if ( have_posts() ) : ?>
                		
                			<?php woocommerce_product_loop_start(); ?>
                
                				<?php woocommerce_product_subcategories(); ?>
                
                				<?php while ( have_posts() ) : the_post(); ?>
                
                					<?php wc_get_template_part( 'content', 'product' ); ?>
                
                				<?php endwhile; // end of the loop. ?>
                
                			<?php woocommerce_product_loop_end(); ?>
                
                			<?php
                				/**
                				 * woocommerce_after_shop_loop hook
                				 *
                				 * @hooked woocommerce_pagination - 10
                				 */
                				do_action( 'woocommerce_after_shop_loop' );
                			?>
                
                		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
                
                			<?php wc_get_template( 'loop/no-products-found.php' ); ?>
                
                		<?php endif; ?>
                        <?php
                    		/**
                    		 * woocommerce_after_main_content hook
                    		 *
                    		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                    		 */
                    		//do_action( 'woocommerce_after_main_content' );
                    	?>
                    </div>   
                </div>
            </div>
            
        </div>
<?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>