<?php
/**
 * Single product short description
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $product;
$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
?>
<?php if ( $post->post_excerpt ) : ?>
    <?php //print_r($post);die; ?>
    <div itemprop="description" class="description">
    	<div class="des-label">Tóm tắt: &nbsp; </div><div class="des-content"><?php echo $post->post_content;//echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></div>
    </div>
<?php endif; ?>
<div class="thuong-hieu">
    <span class="strong label-th">Thương hiệu: </span>
    <?php 
        $trade = get_the_terms( $post->id, 'trademark' ); 
        if(is_array($trade)) {
            $name = end($trade); 
            echo '<span class="th-content">'. $name->name .'</span>';
        }
        
    ?>
</div>
<?php if ( $cat_count > 0 ) : ?>
    <div class="kind-prod">
        <span class="strong label-kind">Loại sản phẩm: </span>
        <?php $cat = get_the_terms( $post->ID, 'product_cat' ) ?>
        <?php $subcat = end($cat); ?>
        <span class="cat-content"><?php echo $subcat->name; ?></span>
    
    </div>
<?php endif; ?>
<div class="bao-hanh">
    <span class="strong">Bảo hành: </span>
    <span class="bh-content"><?php echo get_post_meta( $post->ID, 'bao_hanh', true ); ?></span>
</div>
<div class="tinh-trang">
    <span class="strong">Tình trạng: </span>
    <span class="tt-content"><?php echo $product->is_in_stock() ? 'Còn hàng' : 'Hết hàng'; ?></span>
</div>
<div class="khuyen-mai">
    <span class="strong">Khuyến mại: </span>
    <span class="km-content"><?php echo get_post_meta($post->ID, 'khuyen_mai', true) ?></span>
</div>
