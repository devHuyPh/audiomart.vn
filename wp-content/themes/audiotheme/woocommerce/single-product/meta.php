<?php
/**
 * Single Product Meta
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $product;

$cat_terms = get_the_terms( $post->ID, 'product_cat' );
$cat_count = is_array( $cat_terms ) ? count( $cat_terms ) : 0;
$tag_terms = get_the_terms( $post->ID, 'product_tag' );
$tag_count = is_array( $tag_terms ) ? count( $tag_terms ) : 0;
?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php echo $product->get_tags( ', ', '<span class="tagged_as">' . _n( '', '', $tag_count, 'woocommerce' ) . ' ', '.</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>