<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package zaffre
 */

get_header(); ?>
<div id="content" class="site-content">
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <div id="primary" class="content-area">
 <?php  elseif ( ! is_active_sidebar( 'sidebar-1' ) ) : ?>
 	<div id="primary" class="content-area-wide">
<?php endif; ?>
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

<div class="cf"><?php
the_post_navigation( array(
            'prev_text'                  => __( '&laquo; %title', 'zaffre' ),
            'next_text'                  => __( '<span class="alignright cf">%title &raquo;</span>', 'zaffre' ),
            'in_same_term'               => true,
            'taxonomy'                   => __( 'post_tag', 'zaffre' ),
            'screen_reader_text' => __( 'Continue Reading', 'zaffre' ),
        ) );
?>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
