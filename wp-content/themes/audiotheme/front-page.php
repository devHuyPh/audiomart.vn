<?php
/** The stored homepage was built with Elementor; retain its content filter. */
get_header(); ?>
<main class="wrap audiomart-home">
<?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
</main>
<?php get_footer(); ?>
