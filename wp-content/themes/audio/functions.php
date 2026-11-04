<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', get_bloginfo('template_directory').'/js/jquery.js');
	   wp_enqueue_script('jquery');
       wp_register_script('jquery-migrate.min', get_bloginfo('template_directory').'/js/jquery-migrate.min.js');
	   wp_enqueue_script('jquery-migrate.min');
       wp_register_script('fanviet', get_bloginfo('template_directory').'/js/fanviet.js');
	   wp_enqueue_script('fanviet');
       wp_register_script('bootstrap', get_bloginfo('template_directory').'/js/bootstrap.js');
	   wp_enqueue_script('bootstrap');
       wp_register_script('bootstrap.min', get_bloginfo('template_directory').'/js/bootstrap.min.js');
	   wp_enqueue_script('bootstrap.min');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
        //sidebar tin khuyen mai
        register_sidebar(array(
            'name' => 'Tin Khuyến Mại',
            'id' => 'tinkm-sidebar',
            'description' => 'Width tin khuyen mai',
            'before_widget' => '<div class="scol kmnews omega"><div class="widget wds-km">',
            'after_widget' => '</div></div>',
            'before_title' => '<h4 class="wds-title">',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
    		'name' => 'Showroom Widgets1',
    		'id'   => 'showroom-widgets1',
    		'description'   => 'These are showroom widgets for the sidebar.',
    		'before_widget' => '<div class="scol address alpha">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h5 class="fa-title">',
    		'after_title'   => '</h5>'
    	));
        register_sidebar(array(
    		'name' => 'Showroom Widgets2',
    		'id'   => 'showroom-widgets2',
    		'description'   => 'These are showroom widgets for the sidebar.',
    		'before_widget' => '<div class="scol address">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h5 class="fa-title">',
    		'after_title'   => '</h5>'
    	));
        register_sidebar(array(
    		'name' => 'Showroom Widgets3',
    		'id'   => 'showroom-widgets3',
    		'description'   => 'These are showroom widgets for the sidebar.',
    		'before_widget' => '<div class="scol address">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h5 class="fa-title">',
    		'after_title'   => '</h5>'
    	));
        register_sidebar(array(
    		'name' => 'Showroom Widgets4',
    		'id'   => 'showroom-widgets4',
    		'description'   => 'These are showroom widgets for the sidebar.',
    		'before_widget' => '<div class="scol address omega">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h5 class="fa-title">',
    		'after_title'   => '</h5>'
    	));
    }
    
    //create menu support for theme
    if (function_exists('register_nav_menus')) {
        register_nav_menus(array(
            'main_nav' => 'Main Navigation Menu',
            'second_nav' => 'Mobile Menu'
        ));
    }
    //add thumbnails
    if (function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
    }
    
    //add shortcode tinkhuyenmai
    function newsKm(){
        $html ='<div class="wdsc-kmnewsc">';

        $newskm = new WP_Query('showposts=4&cat=47');
        if($newskm->have_posts()):
        while($newskm->have_posts()):
            $html .='<div class="srow">
                        <p class="scol kmimg alpha">
                            <a href="'.get_permalink().'" title="'.get_the_title().'">
                                '.get_the_post_thumbnail(array(90,60)).'
                            </a>
                        </p>
                        <h3 class="scol kmtitle alpha omega">'.get_the_title().'</h3>
                    </div>';
        endwhile;
        wp_reset_postdata();
        $html .='</div>
                <div class="km-more">
                     <a href="/category/tin-tuc-khuyen-mai">Xem thêm</a>
                </div>
                ';
        endif;
        
        return $html;
    }
    add_shortcode('news_km','newsKm');

?>