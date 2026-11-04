<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '892377317500381');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=892377317500381&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126411732-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126411732-1');
</script>

<meta http-equiv="Cache-control" content="public">
<meta charset="<?php bloginfo('charset'); ?>" />

<?php if (is_search()) { ?>
<meta name="robots" content="index, follow" />
<?php } ?>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>
<?php
            if (function_exists('is_tag') && is_tag()) {
               single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
           elseif (is_archive()) {
               wp_title('');}
           elseif (is_search()) {
               echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
           elseif (!(is_404()) && (is_single()) || (is_page())) {
               wp_title(''); }
           elseif (is_404()) {
               echo 'Not Found'; }
      if (is_home()) {
               wp_title();}
           if ($paged>1) {
               echo ' - page '. $paged; }

?>
</title>

<link rel="shortcut icon" href="/favicon.ico">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min2.css" type='text/css' media='all'>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" type='text/css' media='all'>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet"  type="text/css" href="http://fonts.googleapis.com/css?family=SourceSansPro-Semibold" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
<?php wp_head(); ?>
<style type="text/css">
.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}
.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>

<script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('.cart.mainmenu').hover(function(){
                jQuery('.cart-list').slideToggle(500); 
                return false;
            }); 
             var breadcrumb = jQuery('.breadcrumb').width();
            var text_breakcrum = jQuery('.text-breakcrum').width();
            jQuery('.icon-breakcrum').width(breadcrumb - text_breakcrum -10);
        });

    </script>
<script>
		jQuery(document).ready(function(){
			jQuery(".nav-button").click(function () {
			jQuery(".nav-button,.mainmenu").toggleClass("open");
			});    
		});
		</script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/mediaqueries.css" type='text/css' media='all'>
<style>
body{
-webkit-touch-callout: none;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
-o-user-select: none;
user-select: none;
}
</style>
<script type="text/JavaScript">
function killCopy(e){
return false
}
function reEnable(){
return true
}
document.onselectstart=new Function ("return false")
if (window.sidebar){
document.onmousedown=killCopy
document.onclick=reEnable
}
</script>
</head>
<body <?php body_class(); ?>>
<div class="navbar navbar-static-top">
  <div class="wrap header-top">
    <div class="scol logo">
      <h2 class="slogo">
        <p style="display: none;"><?php echo the_title(); ?> - Audiohanoi</p>
        <a href="<?php echo get_site_url(); ?>" title="<?php bloginfo('description'); ?>"> <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('description'); ?>"/><span>
        <?php bloginfo('description'); ?>
        </span></a> </h2>
    </div>
    <div class="scol search">
      <div class="form-group has-feedback">
        <?php //echo get_search_form( true ); ?>
        <form action="<?php echo home_url( '/' ); ?>" method="get">
          <input type="text" name="s" class="form-control" placeholder="Nh&#7853;p t&#7915; kh&#243;a t&#236;m ki&#7871;m"/>
          <button type="submit" id="searchsubmit" class="btn btn-search glyphicon icon-search form-control-feedback"></button>
          <input type="submit" id="searchsubmit" value="" class="btn btn-search glyphicon glyphicon-search form-control-feedback" />
          <input type="hidden" name="post_type" value="product" />
        </form>
      </div>
    </div>
    <div class="scol phone-header"> <span>Hotline</span> <a> 0985 547 788</a> </div>
 <!--   <div class="scol top-social">
      <ul>
        <li><a rel="nofollow" href="https://www.facebook.com/audiohanoi.86"><img src="<?php bloginfo('template_directory'); ?>/images/icon-facebook.png"/></a></li>
        <li><a rel="nofollow"  href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/icon-twitter.png"/></a></li>
        <li><a rel="nofollow"  href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/icon-gplus.png"/></a></li>
        <li><a rel="nofollow"  href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/icon-youtube.png"/></a></li>
      </ul>
    </div>-->
  </div>
  <nav class="wrap">
    <div class="navigatio menu-section row-fluid menu_scoll">
      <?php wp_nav_menu(array('name' => 'PC Menu', 'container' => '', 'menu_class' => 'srow mainmenu', 'menu_id' => 'menu-main-menu', 'theme_location' => 'main_nav')); ?>
      <div class="cart mainmenu"> <span class="glyphicon menu-cart"></span>
        <ul class="cart-list">
          <?php global $woocommerce; ?>
          <?php $total = 0; ?>
          <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) { 

                                echo '<li>';

                                $_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

                                $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                                if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {

        							if ( ! $_product->is_visible() )

        								echo '<span class="name">'.apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ).'</span>';

        							else

        								echo '<span class="name">'.apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', $_product->get_permalink(), $_product->get_title() ), $cart_item, $cart_item_key ).'</span>';

        

                                }

                                $price = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );

                                echo $price;

                                $total += $price;

                                echo '</li>';

                            }

                        ?>
          <form action="" method="post" id="tt-form">
            <div class="control-group">
              <div class="controls">
                <label>T&#7893;ng s&#7889; ti&#7873;n</label>
                <p><?php echo wc_cart_totals_order_total_html(); ?></p>
              </div>
            </div>
            <div class="clearfix"></div>
            <a href="<?php echo get_site_url(); ?>/checkout">Thanh to&#225;n</a>
          </form>
        </ul>
      </div>
    </div>
  </nav>
</div>
<script type="text/javascript">

        jQuery(document).ready(function(){

            jQuery(window).scroll(function(){

                var aTop=jQuery('.navbar-static-top .logo').height();

                if(jQuery(this).scrollTop()>=aTop){

                    jQuery('.menu_scoll').addClass('navbar-fixed-top');

                };

                if(jQuery(this).scrollTop()<=(aTop)){

                    jQuery('.menu_scoll').removeClass('navbar-fixed-top');

                }

            });

        });

    </script>
