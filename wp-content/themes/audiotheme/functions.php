<?php
/** Theme bootstrap reconstructed from surviving templates and database widgets. */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function audiomart_theme_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'woocommerce' );
    register_nav_menus( array( 'main_nav' => 'PC Menu', 'second_nav' => 'Mobile Menu' ) );
    add_image_size( 'audiomart-product', 205, 205, false );
}
add_action( 'after_setup_theme', 'audiomart_theme_setup' );

function audiomart_theme_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'audiomart-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3', true );
}
add_action( 'wp_enqueue_scripts', 'audiomart_theme_scripts' );

function audiomart_theme_widgets() {
    $areas = array(
        'sidebar-widgets' => 'Sidebar', 'tinkm-sidebar' => 'Tin khuyến mãi',
        'showroom-widgets1' => 'Showroom 1', 'showroom-widgets2' => 'Showroom 2',
        'showroom-widgets3' => 'Showroom 3', 'showroom-widgets4' => 'Showroom 4',
        'tu-van-hi-end' => 'Tư vấn Hi-end', 'tu-van-hi-fi' => 'Tư vấn Hi-fi',
        'tu-van-hi-karaoke' => 'Tư vấn Karaoke', 'tu-van-ti-vi' => 'Tư vấn Tivi',
        'cham-soc-khach-hang' => 'Chăm sóc khách hàng', 'ho-tro-ban-hang' => 'Hỗ trợ bán hàng',
    );
    foreach ( $areas as $id => $name ) {
        $showroom = strpos( $id, 'showroom-widgets' ) === 0;
        $edge = $id === 'showroom-widgets1' ? ' alpha' : ( $id === 'showroom-widgets4' ? ' omega' : '' );
        register_sidebar( array(
            'id' => $id, 'name' => $name,
            'before_widget' => $showroom ? '<div id="%1$s" class="scol address %2$s' . $edge . '">' : '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>', 'before_title' => $showroom ? '<h5 class="fa-title">' : '<h3 class="wds-title">',
            'after_title' => $showroom ? '</h5>' : '</h3>',
        ) );
    }
}
add_action( 'widgets_init', 'audiomart_theme_widgets' );

/** Render the legacy featured-products shortcode still used by sidebar.php. */
function audiomart_featured_products( $atts ) {
    if ( ! function_exists( 'wc_get_template_part' ) ) { return ''; }
    $atts = shortcode_atts( array( 'category' => '', 'columns' => 1, 'limit' => 4 ), $atts );
    $args = array( 'post_type' => 'product', 'post_status' => 'publish',
        'posts_per_page' => max( 1, min( 12, (int) $atts['limit'] ) ),
        'no_found_rows' => true );
    if ( $atts['category'] ) {
        $args['tax_query'] = array( array( 'taxonomy' => 'product_cat',
            'field' => 'slug', 'terms' => sanitize_title( $atts['category'] ) ) );
    }
    $args['meta_query'] = array( array( 'key' => '_featured', 'value' => 'yes' ) );
    $query = new WP_Query( $args );
    if ( ! $query->have_posts() ) {
        unset( $args['meta_query'] );
        $query = new WP_Query( $args );
    }
    global $woocommerce_loop, $product;
    $previous_loop = $woocommerce_loop;
    $previous_product = $product;
    $woocommerce_loop = array( 'columns' => max( 1, min( 4, (int) $atts['columns'] ) ), 'loop' => 0 );
    ob_start();
    woocommerce_product_loop_start();
    while ( $query->have_posts() ) {
        $query->the_post();
        wc_get_template_part( 'content', 'product' );
    }
    woocommerce_product_loop_end();
    wp_reset_postdata();
    $woocommerce_loop = $previous_loop;
    $product = $previous_product;
    return ob_get_clean();
}
add_shortcode( 'product_category_onsale2', 'audiomart_featured_products' );

/** Category banners are already rendered by the taxonomy-images filter. */
add_shortcode( 'advertisment_cat', '__return_empty_string' );

/** Restore taxonomies present in the database and referenced by product templates. */
function audiomart_register_legacy_taxonomies() {
    register_post_type( 'support', array( 'label' => 'Hỗ trợ', 'public' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ) ) );
    register_taxonomy( 'kind_support', 'support', array( 'label' => 'Phân loại hỗ trợ',
        'public' => true, 'hierarchical' => true ) );
    foreach ( array( 'trademark' => 'Thương hiệu', 'thuong_hieu' => 'Thương hiệu khác', 'brand' => 'Nhãn hiệu' ) as $slug => $label ) {
        if ( ! taxonomy_exists( $slug ) ) {
            register_taxonomy( $slug, 'product', array( 'label' => $label,
                'public' => true, 'hierarchical' => true, 'show_admin_column' => true ) );
        }
    }
}
add_action( 'init', 'audiomart_register_legacy_taxonomies', 20 );

/** Promotion-news widget retained by the older sibling theme and saved widgets. */
function audiomart_promotion_news( $atts = array() ) {
    $atts = shortcode_atts( array( 'category' => 47 ), $atts );
    $query = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish',
        'cat' => (int) $atts['category'], 'posts_per_page' => 4, 'no_found_rows' => true ) );
    ob_start();
    echo '<div class="wdsc-kmnewsc">';
    while ( $query->have_posts() ) {
        $query->the_post();
        echo '<div class="srow"><p class="scol kmimg alpha"><a href="' . esc_url( get_permalink() ) . '">';
        the_post_thumbnail( array( 90, 60 ) );
        echo '</a></p><h3 class="scol kmtitle alpha omega"><a href="' . esc_url( get_permalink() ) . '">' . esc_html( get_the_title() ) . '</a></h3></div>';
    }
    echo '</div>';
    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode( 'news_km', 'audiomart_promotion_news' );

function audiomart_latest_news() {
    return audiomart_promotion_news( array( 'category' => 0 ) );
}
add_shortcode( 'newNews', 'audiomart_latest_news' );
