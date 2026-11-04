<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
?>
<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

 <?php get_header(); ?>
<div class="pf-wrap wrap">
    
    <div class="scol p-content omega">
        <div class="chitietsp">
            <div class="wdsc-spkm">
                <div class="breadcrumb clearfix">
                    <div class="text-breakcrum">
                        <span>
                        <a href="<?php echo get_site_url(); ?>">Trang chủ &nbsp;</a>»&nbsp;<span>
                        <?php 
                            global $post, $product;
                        
                			if ( $terms = wc_get_product_terms( $post->ID, 'product_cat', array( 'orderby' => 'parent', 'order' => 'DESC' ) ) ) {
                
                				$main_term = $terms[0];
                
                				$ancestors = get_ancestors( $main_term->term_id, 'product_cat' );
                
                				$ancestors = array_reverse( $ancestors );
                
                				foreach ( $ancestors as $ancestor ) {
                					$ancestor = get_term( $ancestor, 'product_cat' );
                
                					if ( ! is_wp_error( $ancestor ) && $ancestor )
                						echo '<a href="' . get_term_link( $ancestor->slug, 'product_cat' ) . '">' . $ancestor->name . '</a>' . '&nbsp; » &nbsp';
                				}
                
                				echo  '<a href="' . get_term_link( $main_term->slug, 'product_cat' ) . '">' . $main_term->name . '</a>' . '&nbsp; » &nbsp';
                
                			}
                
                            ?>
                            <a href="<?php get_permalink() ?>"><?php the_title(); ?></a></span>
                            </span>
                    </div>
                    <div class="icon-breakcrum"></div>
                </div>
                <?php while ( have_posts() ) : the_post(); ?>

        			<?php wc_get_template_part( 'content', 'single-product' ); ?>
        
        		<?php endwhile; // end of the loop. ?>
                 
                                 
            </div>
        </div>
    </div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
