<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;



		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		<div class="post-links">
			<?php the_posts_pagination( array(
    'mid_size'  => 2,
    'prev_text' => __( '&larr; <span class="to">Previous</span>', 'zaffre' ),
    'next_text' => __( '<span class="to">Next</span> &rarr;', 'zaffre' ),
) ); ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();