<?php
/**
 * Single Product title
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>
<script>
    !function(d,s,id){
            var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
            if(!d.getElementById(id)){js=d.createElement(s);
            js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
            fjs.parentNode.insertBefore(js,fjs);
            }}
            (document, 'script', 'twitter-wjs');
</script>
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'vi'}
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<?php global $product, $post ?>

<h1 itemprop="name" class="product_title entry-title"><div><?php the_title(); ?> </div>
<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
     <div class="masp"> Mã SP: <?php echo $product->get_sku()?$product->get_sku():__('N/A,woocommerce '); ?></div>
<?php endif; ?>
</h1>
<div class="share-network-socail">
    <ul>
        <li class="fb-like">
            <div class="fb-like" data-href="<?php echo the_permalink() ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
        </li>
        <li class="twitter">
            <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
        </li>
        <li class="google-plus">
            <div class="g-plusone" data-size="medium"></div>
        </li>
    </ul>

</div>