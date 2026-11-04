<?php
/**
 * The template to display default site footer
 *
 * @package WordPress
 * @subpackage CARPETSERV
 * @since CARPETSERV 1.0.10
 */

$carpetserv_footer_scheme =  carpetserv_is_inherit(carpetserv_get_theme_option('footer_scheme')) ? carpetserv_get_theme_option('color_scheme') : carpetserv_get_theme_option('footer_scheme');
$carpetserv_footer_id = str_replace('footer-custom-', '', carpetserv_get_theme_option("footer_style"));
?>
<footer class="footer_wrap footer_custom footer_custom_<?php echo esc_attr($carpetserv_footer_id); ?> scheme_<?php echo esc_attr($carpetserv_footer_scheme); ?>">
	<?php
    // Custom footer's layout
    do_action('carpetserv_action_show_layout', $carpetserv_footer_id);
	?>
</footer><!-- /.footer_wrap -->
