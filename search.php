<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package zaffre
 */

get_header(); ?>
<div id="content" class="site-content">

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'zaffre' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
