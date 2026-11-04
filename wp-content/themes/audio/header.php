<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

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
		         bloginfo('name');}
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" type='text/css' media='all'>
    
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet"  type="text/css" href="http://fonts.googleapis.com/css?family=SourceSansPro-Semibold" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
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
</head>

<body <?php body_class(); ?>>
	
	<header class="wrap">
        <div class="scol logo">
            <h1 class="slogo">
                <a href="/" title="<?php bloginfo('description'); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('description'); ?>"/><span><?php bloginfo('description'); ?></span></a>
            </h1>
        </div>
        <div class="scol search">
            <div class="form-group has-feedback">
                <form action="" method="post">
                    <input type="text" name="s" class="form-control"/>
                    <button type="submit" class="btn btn-search glyphicon glyphicon-search form-control-feedback"></button>
                </form>
                
            </div>
        </div>
        <div class="scol phone-header">
            <span>Hotline</span>
            <a> 0913 225 494</a>
        </div>
        <div class="scol top-social">
            <ul>
                <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/icon-facebook.png"/></a></li>
                <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/icon-twitter.png"/></a></li>
                <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/icon-gplus.png"/></a></li>
                <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/icon-youtube.png"/></a></li>
            </ul>
        </div>
    </header>
    <nav class="wrap">
        <div class="navigatio">
            <?php wp_nav_menu(array('name' => 'PC Menu', 'container' => '', 'menu_class' => 'srow mainmenu', 'menu_id' => 'menu-main-menu', 'theme_location' => 'main_nav')); ?>
            <div class="cart mainmenu">
                <span class="glyphicon glyphicon-shopping-cart"></span>
                <ul class="cart-list">
                        <li>
                            <span class="name">Logitech Surround</span>
                            <span class="price">1.000.000vnđ</span>
                        </li>
                        <li>
                            <span class="name">Logitech Surround</span>
                            <span class="price">1.000.000vnđ</span>
                        </li>
                        <li>
                            <span class="name">Logitech Surround</span>
                            <span class="price">1.000.000vnđ</span>
                        </li>
                        <form action="" method="post" id="tt-form">
                            <div class="control-group">
                                <div class="controls">
                                    <label>Tổng số tiền</label>
                                    <p>3.000.000vnđ</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <a href="#">Thanh Toán</a> 
                        </form>
                </ul>
            </div>
            
        </div>
    </nav>